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
import "../delegates"

CommonDialog {
    id: root

    property int boxId : 0
    property alias todoTitle: titleField.text

    titleText: "Create Todo"

    content: Column {
        spacing: 8
        anchors.left: parent.left; anchors.right: parent.right

        Label {
            id: titleLabel
            text:  "Title:"
            color: platformStyle.colorNormalLight
            font.pixelSize: platformStyle.fontSizeMedium
        }

        TextField{
            id: titleField
            placeholderText: "Enter todo title..."
            anchors{
                right: parent.right; left: parent.left
            }
        }

        Label {
            id : boxLabel
            text:  "Box:"
            color: platformStyle.colorNormalLight
            font.pixelSize: platformStyle.fontSizeMedium
        }

        SelectionListItem {
            id: itemSelection
            // by default the first one
            title: selectionDialog.model.get(boxId).name
            onClicked: selectionDialog.open()
            anchors{
                right: parent.right; left: parent.left
            }

            BoxSelectionDialog {
                id: selectionDialog
                titleText: "Select Box"

                onAccepted :{
                    itemSelection.title = model.get(selectedIndex).name;
                    boxId = model.get(selectedIndex).boxId;
                }
            }
        }
    }

    onStatusChanged: {
        if(status == DialogStatus.Opening) {
            todoTitle = "";
        }
    }

    buttons: ButtonRow {
        anchors { left: parent.left; right:  parent.right; margins: 16 }
        Button { text: "Ok" ; onClicked: root.accept()}
        Button { text: "Cancel"; onClicked: root.reject() }
    }
}
