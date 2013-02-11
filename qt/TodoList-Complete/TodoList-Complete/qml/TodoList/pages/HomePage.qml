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
// Modified by JRV
import QtQuick 1.0
import com.nokia.symbian 1.1
import "../delegates"
import "../js/core.js" as Core

Page {
    id: root

    ListModel {
        id: boxModel

        ListElement { name: "Inbox";   box: 0 }
        ListElement { name: "Today";   box: 1 }
        ListElement { name: "Next";    box: 2 }
        ListElement { name: "Later";   box: 3 }
        ListElement { name: "Additional Items";   box: 4 }
        ListElement { name: "Additional Green";   box: 5 }
        ListElement { name: "Hate Related";   box: 6 }
        ListElement { name: "Mind Control Techniques";   box: 7 }
    }

    TitleHeader {
        id: header
        text: "Memo and History"
    }

    ListView {
        id:  boxView
        anchors {
            left: root.left; right: root.right
            top: header.bottom; bottom: parent.bottom
        }
        model: boxModel
        delegate: BoxItemDelegate {
            id: itemDelegate
            title: model.name
            onClicked: {
                root.pageStack.push(window.boxPage, {boxId: model.box, title: model.name});
            }
        }
        clip: true
    }

    TodoCreateDialog {
        id: todoCreateDialog

        onAccepted: {
            if(todoTitle !== "") {
                var item = Core.defaultItem();
                item.box = boxId;
                item.title = todoTitle;
                Core.createTodo(item);
            }
        }
    }

    tools: ToolBarLayout {
        id: pageSpecificTools
        ToolButton { iconSource: "toolbar-back"; onClicked:  Qt.quit()}
        ToolButton { iconSource: "toolbar-add"; onClicked: todoCreateDialog.open() }
        ToolButton {
            iconSource: "toolbar-settings";
            onClicked: root.pageStack.push(Qt.resolvedUrl("ToolPage.qml"))
        }
    }
}
