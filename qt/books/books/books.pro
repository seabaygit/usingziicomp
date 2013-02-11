TEMPLATE = app
INCLUDEPATH += .

HEADERS     = bookdelegate.h bookwindow.h initdb.h
RESOURCES   = books.qrc
SOURCES     = bookdelegate.cpp main.cpp bookwindow.cpp
FORMS       = bookwindow.ui

QT += sql

target.path = $$[QT_INSTALL_DEMOS]/books
sources.files = $$SOURCES $$HEADERS $$RESOURCES $$FORMS *.pro images
sources.path = $$[QT_INSTALL_DEMOS]/books
INSTALLS += target sources

symbian: include($$QT_SOURCE_TREE/demos/symbianpkgrules.pri)

wince*: {
    CONFIG(debug, debug|release):sqlPlugins.sources = $$QT_BUILD_TREE/plugins/sqldrivers/*d4.dll
    CONFIG(release, debug|release):sqlPlugins.sources = $$QT_BUILD_TREE/plugins/sqldrivers/*[^d]4.dll
    sqlPlugins.path = sqldrivers
    DEPLOYMENT += sqlPlugins
}

OTHER_FILES += \
    images/san_mateo.png \
    images/miamibeach.png \
    images/south_san_francisco.png \
    images/san_jose.png \
    images/san_francisco.png \
    images/los_angeles.png \
    images/canada.png