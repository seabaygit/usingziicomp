/********************************************************************************
** Form generated from reading UI file 'bookwindow.ui'
**
** Created: Fri Jun 22 12:48:24 2012
**      by: Qt User Interface Compiler version 4.7.4
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
#include <QtGui/QPushButton>
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
    QGroupBox *groupBox_2;
    QTextEdit *editTextEdit;
    QLabel *miami_beach;
    QLabel *lb_fort_lauderdale;
    QLabel *label_2;
    QLabel *label_6;
    QLabel *canada;
    QLabel *lb_san_jose;
    QLabel *label_3;
    QLabel *label_12;
    QPushButton *btnUpdate;
    QPushButton *btnSortByYear;
    QPushButton *btnSortByAuthor;
    QPushButton *btnSortByTitle;
    QTextEdit *textTestimony;
    QLabel *label;
    QLabel *label_4;
    QTableView *bookTable;

    void setupUi(QMainWindow *BookWindow)
    {
        if (BookWindow->objectName().isEmpty())
            BookWindow->setObjectName(QString::fromUtf8("BookWindow"));
        BookWindow->resize(769, 461);
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
        groupBox_2 = new QGroupBox(groupBox);
        groupBox_2->setObjectName(QString::fromUtf8("groupBox_2"));
        groupBox_2->setGeometry(QRect(20, 200, 711, 241));
        editTextEdit = new QTextEdit(groupBox_2);
        editTextEdit->setObjectName(QString::fromUtf8("editTextEdit"));
        editTextEdit->setGeometry(QRect(20, 40, 361, 111));
        editTextEdit->setAutoFillBackground(false);
        miami_beach = new QLabel(groupBox_2);
        miami_beach->setObjectName(QString::fromUtf8("miami_beach"));
        miami_beach->setGeometry(QRect(20, 200, 50, 50));
        miami_beach->setMinimumSize(QSize(50, 50));
        miami_beach->setMaximumSize(QSize(100, 100));
        miami_beach->setPixmap(QPixmap(QString::fromUtf8(":/images/miamibeach.png")));
        lb_fort_lauderdale = new QLabel(groupBox_2);
        lb_fort_lauderdale->setObjectName(QString::fromUtf8("lb_fort_lauderdale"));
        lb_fort_lauderdale->setGeometry(QRect(180, 200, 50, 50));
        lb_fort_lauderdale->setMinimumSize(QSize(50, 50));
        lb_fort_lauderdale->setMaximumSize(QSize(100, 100));
        lb_fort_lauderdale->setPixmap(QPixmap(QString::fromUtf8(":/images/fort_lauderdale_airport.png")));
        label_2 = new QLabel(groupBox_2);
        label_2->setObjectName(QString::fromUtf8("label_2"));
        label_2->setGeometry(QRect(340, 200, 50, 50));
        label_2->setMinimumSize(QSize(50, 50));
        label_2->setMaximumSize(QSize(100, 100));
        label_2->setPixmap(QPixmap(QString::fromUtf8(":/images/south_san_francisco.png")));
        label_6 = new QLabel(groupBox_2);
        label_6->setObjectName(QString::fromUtf8("label_6"));
        label_6->setGeometry(QRect(500, 200, 50, 50));
        label_6->setMinimumSize(QSize(50, 50));
        label_6->setMaximumSize(QSize(100, 100));
        label_6->setPixmap(QPixmap(QString::fromUtf8(":/images/san_mateo.png")));
        canada = new QLabel(groupBox_2);
        canada->setObjectName(QString::fromUtf8("canada"));
        canada->setGeometry(QRect(20, 250, 50, 50));
        canada->setMinimumSize(QSize(50, 50));
        canada->setMaximumSize(QSize(100, 100));
        canada->setPixmap(QPixmap(QString::fromUtf8(":/images/canada.png")));
        lb_san_jose = new QLabel(groupBox_2);
        lb_san_jose->setObjectName(QString::fromUtf8("lb_san_jose"));
        lb_san_jose->setGeometry(QRect(180, 250, 50, 50));
        lb_san_jose->setMinimumSize(QSize(50, 50));
        lb_san_jose->setMaximumSize(QSize(100, 100));
        lb_san_jose->setPixmap(QPixmap(QString::fromUtf8(":/images/san_jose.png")));
        label_3 = new QLabel(groupBox_2);
        label_3->setObjectName(QString::fromUtf8("label_3"));
        label_3->setGeometry(QRect(340, 250, 50, 50));
        label_3->setMinimumSize(QSize(50, 50));
        label_3->setMaximumSize(QSize(100, 100));
        label_3->setPixmap(QPixmap(QString::fromUtf8(":/images/san_francisco.png")));
        label_12 = new QLabel(groupBox_2);
        label_12->setObjectName(QString::fromUtf8("label_12"));
        label_12->setGeometry(QRect(500, 250, 50, 50));
        label_12->setMinimumSize(QSize(50, 50));
        label_12->setMaximumSize(QSize(100, 100));
        label_12->setPixmap(QPixmap(QString::fromUtf8(":/images/los_angeles.png")));
        btnUpdate = new QPushButton(groupBox_2);
        btnUpdate->setObjectName(QString::fromUtf8("btnUpdate"));
        btnUpdate->setGeometry(QRect(20, 160, 91, 31));
        btnSortByYear = new QPushButton(groupBox_2);
        btnSortByYear->setObjectName(QString::fromUtf8("btnSortByYear"));
        btnSortByYear->setGeometry(QRect(170, 160, 131, 31));
        btnSortByAuthor = new QPushButton(groupBox_2);
        btnSortByAuthor->setObjectName(QString::fromUtf8("btnSortByAuthor"));
        btnSortByAuthor->setGeometry(QRect(350, 160, 151, 31));
        btnSortByTitle = new QPushButton(groupBox_2);
        btnSortByTitle->setObjectName(QString::fromUtf8("btnSortByTitle"));
        btnSortByTitle->setGeometry(QRect(550, 160, 151, 31));
        textTestimony = new QTextEdit(groupBox_2);
        textTestimony->setObjectName(QString::fromUtf8("textTestimony"));
        textTestimony->setGeometry(QRect(403, 40, 291, 111));
        label = new QLabel(groupBox_2);
        label->setObjectName(QString::fromUtf8("label"));
        label->setGeometry(QRect(20, 20, 101, 20));
        label_4 = new QLabel(groupBox_2);
        label_4->setObjectName(QString::fromUtf8("label_4"));
        label_4->setGeometry(QRect(400, 10, 271, 20));
        editTextEdit->raise();
        lb_fort_lauderdale->raise();
        label_2->raise();
        label_6->raise();
        miami_beach->raise();
        canada->raise();
        lb_san_jose->raise();
        label_3->raise();
        label_12->raise();
        btnUpdate->raise();
        btnSortByYear->raise();
        btnSortByAuthor->raise();
        btnSortByTitle->raise();
        textTestimony->raise();
        label->raise();
        label_4->raise();
        bookTable = new QTableView(groupBox);
        bookTable->setObjectName(QString::fromUtf8("bookTable"));
        bookTable->setGeometry(QRect(30, 30, 681, 161));

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
        canada->setText(QString());
        lb_san_jose->setText(QString());
        label_3->setText(QString());
        label_12->setText(QString());
        btnUpdate->setText(QApplication::translate("BookWindow", "Update", 0, QApplication::UnicodeUTF8));
        btnSortByYear->setText(QApplication::translate("BookWindow", "Sort By Year", 0, QApplication::UnicodeUTF8));
        btnSortByAuthor->setText(QApplication::translate("BookWindow", "Sort by Author", 0, QApplication::UnicodeUTF8));
        btnSortByTitle->setText(QApplication::translate("BookWindow", "Sort by Title", 0, QApplication::UnicodeUTF8));
        label->setText(QApplication::translate("BookWindow", "Book Opinions", 0, QApplication::UnicodeUTF8));
        label_4->setText(QApplication::translate("BookWindow", "Testimony", 0, QApplication::UnicodeUTF8));
    } // retranslateUi

};

namespace Ui {
    class BookWindow: public Ui_BookWindow {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_BOOKWINDOW_H
