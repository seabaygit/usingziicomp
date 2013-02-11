// ---------------------------------------------------------------------------
//Copyright (C) 2008-2011 Nokia Corporation and/or its subsidiary(-ies).
//All rights reserved.
//Contact: Nokia Corporation (qt-info@nokia.com)

//You may use the files in this folder under the terms of the BSD
//license as follows:

//Redistribution and use in source and binary forms, with or without
//modification, are permitted provided that the following conditions are
//met:
//  * Redistributions of source code must retain the above copyright
//    notice, this list of conditions and the following disclaimer.
//  * Redistributions in binary form must reproduce the above copyright
//    notice, this list of conditions and the following disclaimer in
//    the documentation and/or other materials provided with the
//    distribution.
//  * Neither the name of Nokia Corporation and its Subsidiary(-ies) nor
//    the names of its contributors may be used to endorse or promote
//    products derived from this software without specific prior written
//    permission.

//THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
//"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
//LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
//A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
//OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
//SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
//LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
//DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
//THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
//(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
// ---------------------------------------------------------------------------

import QtQuick 1.0
import com.nokia.symbian 1.1
import "../js/core.js" as Core
import "../delegates"


Page {
    id : root

    property int boxId: 0
    property string title

    TitleHeader {
        id: header
        text:  root.title
    }

    ListModel{
        id: itemModel
    }

    ListView {
        id:  itemView
        anchors {
            left: root.left; right: root.right
            top: header.bottom; bottom: parent.bottom
        }
        model: itemModel
        delegate: TodoItemDelegate{
            id: todoItemDelegate
            title: model.title
            checked: model.done
            onClicked: {
                root.pageStack.push(window.todoPage, {todoId: model.id, state:"details"});
            }
            onCheckBoxClicked: {
                if(checked != model.done) {
                    itemModel.setProperty(index, 'done', checked);
                    Core.updateTodo(model);
                }
            }
        }
        clip: true
    }

    TodoCreateDialog {
        id: todoCreateDialog
        boxId: root.boxId

        onAccepted: {
            if(todoTitle !== "") {
                var item = Core.defaultItem();
                item.box = boxId;
                item.title = todoTitle;
                Core.createTodo(item);
                updateUi();
            }
        }
    }

    tools: ToolBarLayout {
        ToolButton {iconSource: "toolbar-back"; onClicked: root.pageStack.pop()}
        ToolButton {iconSource: "toolbar-add"; onClicked: todoCreateDialog.open()}
    }

    function updateUi()
    {
        itemView.model = 0;
        Core.readTodoBox(itemModel, boxId);
        itemView.model = itemModel;
    }

    onStatusChanged: {
        if(status == PageStatus.Activating) {
            updateUi();
        }
    }
}
