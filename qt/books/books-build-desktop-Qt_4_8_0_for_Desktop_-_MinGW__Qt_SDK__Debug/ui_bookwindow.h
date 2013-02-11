/********************************************************************************
** Form generated from reading UI file 'bookwindow.ui'
**
** Created: Mon May 28 18:51:58 2012
**      by: Qt User Interface Compiler version 4.8.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_BOOKWINDOW_H
#define UI_BOOKWINDOW_H

#include <QtCore/QVariant>
#include <QtGui/QAction>
#include <QtGui/QApplication>
#include <QtGui/QButtonGroup>
#include <QtGui/QGroupBox>
#include <QtGui/QHeaderView>
#include <QtGui/QLabel>
#include <QtGui/QMainWindow>
#include <QtGui/QTableView>
#include <QtGui/QTextEdit>
#include <QtGui/QVBoxLayout>
#include <QtGui/QWidget>

QT_BEGIN_NAMESPACE

class Ui_BookWindow
{
public:
    QWidget *centralWidget;
    QVBoxLayout *vboxLayout;
    QGroupBox *groupBox;
    QTableView *bookTable;
    QGroupBox *groupBox_2;
    QTextEdit *editTextEdit;
    QLabel *miami_beach;
    QLabel *lb_fort_lauderdale;
    QLabel *label_2;
    QLabel *label_6;
    QLabel *label_7;
    QLabel *label_8;
    QLabel *label_9;
    QLabel *label_10;
    QLabel *canada;
    QLabel *label_11;
    QLabel *lb_san_jose;
    QLabel *label_3;
    QLabel *label_12;
    QLabel *label_13;
    QLabel *label_14;
    QLabel *label_15;

    void setupUi(QMainWindow *BookWindow)
    {
        if (BookWindow->objectName().isEmpty())
            BookWindow->setObjectName(QString::fromUtf8("BookWindow"));
        BookWindow->resize(609, 443);
        QPalette palette;
        QBrush brush(QColor(255, 255, 255, 255));
        brush.setStyle(Qt::SolidPattern);
        palette.setBrush(QPalette::Active, QPalette::Base, brush);
        QBrush brush1(QColor(170, 170, 255, 255));
        brush1.setStyle(Qt::SolidPattern);
        palette.setBrush(QPalette::Active, QPalette::Window, brush1);
        palette.setBrush(QPalette::Inactive, QPalette::Base, brush);
        palette.setBrush(QPalette::Inactive, QPalette::Window, brush1);
        palette.setBrush(QPalette::Disabled, QPalette::Base, brush1);
        palette.setBrush(QPalette::Disabled, QPalette::Window, brush1);
        BookWindow->setPalette(palette);
        BookWindow->setAutoFillBackground(false);
        centralWidget = new QWidget(BookWindow);
        centralWidget->setObjectName(QString::fromUtf8("centralWidget"));
        vboxLayout = new QVBoxLayout(centralWidget);
#ifndef Q_OS_MAC
        vboxLayout->setSpacing(6);
#endif
#ifndef Q_OS_MAC
        vboxLayout->setContentsMargins(9, 9, 9, 9);
#endif
        vboxLayout->setObjectName(QString::fromUtf8("vboxLayout"));
        groupBox = new QGroupBox(centralWidget);
        groupBox->setObjectName(QString::fromUtf8("groupBox"));
        bookTable = new QTableView(groupBox);
        bookTable->setObjectName(QString::fromUtf8("bookTable"));
        bookTable->setGeometry(QRect(10, 23, 561, 91));
        bookTable->setSelectionBehavior(QAbstractItemView::SelectRows);
        groupBox_2 = new QGroupBox(groupBox);
        groupBox_2->setObjectName(QString::fromUtf8("groupBox_2"));
        groupBox_2->setGeometry(QRect(10, 120, 571, 301));
        editTextEdit = new QTextEdit(groupBox_2);
        editTextEdit->setObjectName(QString::fromUtf8("editTextEdit"));
        editTextEdit->setGeometry(QRect(10, 30, 541, 111));
        miami_beach = new QLabel(groupBox_2);
        miami_beach->setObjectName(QString::fromUtf8("miami_beach"));
        miami_beach->setGeometry(QRect(20, 170, 50, 50));
        miami_beach->setMinimumSize(QSize(50, 50));
        miami_beach->setMaximumSize(QSize(100, 100));
        miami_beach->setPixmap(QPixmap(QString::fromUtf8(":/images/miamibeach.png")));
        lb_fort_lauderdale = new QLabel(groupBox_2);
        lb_fort_lauderdale->setObjectName(QString::fromUtf8("lb_fort_lauderdale"));
        lb_fort_lauderdale->setGeometry(QRect(180, 170, 50, 50));
        lb_fort_lauderdale->setMinimumSize(QSize(50, 50));
        lb_fort_lauderdale->setMaximumSize(QSize(100, 100));
        lb_fort_lauderdale->setPixmap(QPixmap(QString::fromUtf8(":/images/fort_lauderdale_airport.png")));
        label_2 = new QLabel(groupBox_2);
        label_2->setObjectName(QString::fromUtf8("label_2"));
        label_2->setGeometry(QRect(340, 170, 50, 50));
        label_2->setMinimumSize(QSize(50, 50));
        label_2->setMaximumSize(QSize(100, 100));
        label_2->setPixmap(QPixmap(QString::fromUtf8(":/images/south_san_francisco.png")));
        label_6 = new QLabel(groupBox_2);
        label_6->setObjectName(QString::fromUtf8("label_6"));
        label_6->setGeometry(QRect(500, 170, 50, 50));
        label_6->setMinimumSize(QSize(50, 50));
        label_6->setMaximumSize(QSize(100, 100));
        label_6->setPixmap(QPixmap(QString::fromUtf8(":/images/san_mateo.png")));
        label_7 = new QLabel(groupBox_2);
        label_7->setObjectName(QString::fromUtf8("label_7"));
        label_7->setGeometry(QRect(20, 150, 71, 21));
        label_8 = new QLabel(groupBox_2);
        label_8->setObjectName(QString::fromUtf8("label_8"));
        label_8->setGeometry(QRect(150, 150, 111, 20));
        label_9 = new QLabel(groupBox_2);
        label_9->setObjectName(QString::fromUtf8("label_9"));
        label_9->setGeometry(QRect(320, 150, 101, 16));
        label_10 = new QLabel(groupBox_2);
        label_10->setObjectName(QString::fromUtf8("label_10"));
        label_10->setGeometry(QRect(500, 150, 61, 16));
        canada = new QLabel(groupBox_2);
        canada->setObjectName(QString::fromUtf8("canada"));
        canada->setGeometry(QRect(20, 240, 50, 50));
        canada->setMinimumSize(QSize(50, 50));
        canada->setMaximumSize(QSize(100, 100));
        canada->setPixmap(QPixmap(QString::fromUtf8(":/images/canada.png")));
        label_11 = new QLabel(groupBox_2);
        label_11->setObjectName(QString::fromUtf8("label_11"));
        label_11->setGeometry(QRect(20, 220, 41, 21));
        lb_san_jose = new QLabel(groupBox_2);
        lb_san_jose->setObjectName(QString::fromUtf8("lb_san_jose"));
        lb_san_jose->setGeometry(QRect(180, 240, 50, 50));
        lb_san_jose->setMinimumSize(QSize(50, 50));
        lb_san_jose->setMaximumSize(QSize(100, 100));
        lb_san_jose->setPixmap(QPixmap(QString::fromUtf8(":/images/san_jose.png")));
        label_3 = new QLabel(groupBox_2);
        label_3->setObjectName(QString::fromUtf8("label_3"));
        label_3->setGeometry(QRect(340, 240, 50, 50));
        label_3->setMinimumSize(QSize(50, 50));
        label_3->setMaximumSize(QSize(100, 100));
        label_3->setPixmap(QPixmap(QString::fromUtf8(":/images/san_francisco.png")));
        label_12 = new QLabel(groupBox_2);
        label_12->setObjectName(QString::fromUtf8("label_12"));
        label_12->setGeometry(QRect(500, 240, 50, 50));
        label_12->setMinimumSize(QSize(50, 50));
        label_12->setMaximumSize(QSize(100, 100));
        label_12->setPixmap(QPixmap(QString::fromUtf8(":/images/los_angeles.png")));
        label_13 = new QLabel(groupBox_2);
        label_13->setObjectName(QString::fromUtf8("label_13"));
        label_13->setGeometry(QRect(180, 220, 51, 20));
        label_14 = new QLabel(groupBox_2);
        label_14->setObjectName(QString::fromUtf8("label_14"));
        label_14->setGeometry(QRect(330, 220, 71, 16));
        label_15 = new QLabel(groupBox_2);
        label_15->setObjectName(QString::fromUtf8("label_15"));
        label_15->setGeometry(QRect(490, 220, 61, 16));
        editTextEdit->raise();
        lb_fort_lauderdale->raise();
        label_2->raise();
        label_6->raise();
        label_7->raise();
        label_8->raise();
        label_9->raise();
        label_10->raise();
        miami_beach->raise();
        canada->raise();
        label_11->raise();
        lb_san_jose->raise();
        label_3->raise();
        label_12->raise();
        label_13->raise();
        label_14->raise();
        label_15->raise();

        vboxLayout->addWidget(groupBox);

        BookWindow->setCentralWidget(centralWidget);

        retranslateUi(BookWindow);

        QMetaObject::connectSlotsByName(BookWindow);
    } // setupUi

    void retranslateUi(QMainWindow *BookWindow)
    {
        BookWindow->setWindowTitle(QApplication::translate("BookWindow", "Media Compilation - Books, articles, documents and websites", 0, QApplication::UnicodeUTF8));
        groupBox->setTitle(QApplication::translate("BookWindow", "Media Compliation", 0, QApplication::UnicodeUTF8));
        groupBox_2->setTitle(QApplication::translate("BookWindow", "Details", 0, QApplication::UnicodeUTF8));
        miami_beach->setText(QString());
        lb_fort_lauderdale->setText(QString());
        label_2->setText(QString());
        label_6->setText(QString());
        label_7->setText(QApplication::translate("BookWindow", "Miami Beach", 0, QApplication::UnicodeUTF8));
        label_8->setText(QApplication::translate("BookWindow", "Fort Lauderdale Airport", 0, QApplication::UnicodeUTF8));
        label_9->setText(QApplication::translate("BookWindow", "South San Francisco", 0, QApplication::UnicodeUTF8));
        label_10->setText(QApplication::translate("BookWindow", "San Mateo", 0, QApplication::UnicodeUTF8));
        canada->setText(QString());
        label_11->setText(QApplication::translate("BookWindow", "Canada", 0, QApplication::UnicodeUTF8));
        lb_san_jose->setText(QString());
        label_3->setText(QString());
        label_12->setText(QString());
        label_13->setText(QApplication::translate("BookWindow", "San Jose", 0, QApplication::UnicodeUTF8));
        label_14->setText(QApplication::translate("BookWindow", " San Francisco", 0, QApplication::UnicodeUTF8));
        label_15->setText(QApplication::translate("BookWindow", "Los Angeles", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class BookWindow: public Ui_BookWindow {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_BOOKWINDOW_H
