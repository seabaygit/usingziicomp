/****************************************************************************
**
** Copyright (C) 2011 Nokia Corporation and/or its subsidiary(-ies).
** All rights reserved.
** Contact: Nokia Corporation (qt-info@nokia.com)
**
** This file is part of the demonstration applications of the Qt Toolkit.
**
** $QT_BEGIN_LICENSE:LGPL$
** GNU Lesser General Public License Usage
** This file may be used under the terms of the GNU Lesser General Public
** License version 2.1 as published by the Free Software Foundation and
** appearing in the file LICENSE.LGPL included in the packaging of this
** file. Please review the following information to ensure the GNU Lesser
** General Public License version 2.1 requirements will be met:
** http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html.
**
** In addition, as a special exception, Nokia gives you certain additional
** rights. These rights are described in the Nokia Qt LGPL Exception
** version 1.1, included in the file LGPL_EXCEPTION.txt in this package.
**
** GNU General Public License Usage
** Alternatively, this file may be used under the terms of the GNU General
** Public License version 3.0 as published by the Free Software Foundation
** and appearing in the file LICENSE.GPL included in the packaging of this
** file. Please review the following information to ensure the GNU General
** Public License version 3.0 requirements will be met:
** http://www.gnu.org/copyleft/gpl.html.
**
** Other Usage
** Alternatively, this file may be used in accordance with the terms and
** conditions contained in a signed written agreement between you and Nokia.
**
**
**
**
**
** $QT_END_LICENSE$
**
****************************************************************************/

#ifndef INITDB_H
#define INITDB_H
#include <QtSql>

void addBook(QSqlQuery &q, const QString &title, int year, const QVariant &authorId,
             const QVariant &genreId, int rating, const QString &memo)
{
    q.addBindValue(title);
    q.addBindValue(year);
    q.addBindValue(authorId);
    q.addBindValue(genreId);
    q.addBindValue(rating);
    q.addBindValue(memo);
    q.exec();
}

QVariant addGenre(QSqlQuery &q, const QString &name)
{
    q.addBindValue(name);
    q.exec();
    return q.lastInsertId();
}

QVariant addAuthor(QSqlQuery &q, const QString &name, const QDate &birthdate)
{
    q.addBindValue(name);
    q.addBindValue(birthdate);
    q.exec();
    return q.lastInsertId();
}

QSqlError initDb()
{
    QSqlDatabase db = QSqlDatabase::addDatabase("QSQLITE");
    db.setDatabaseName("gooddata.db");

    if (!db.open())
        return db.lastError();

    QStringList tables = db.tables();
    if (tables.contains("books", Qt::CaseInsensitive)
        && tables.contains("authors", Qt::CaseInsensitive))
        return QSqlError();

    QSqlQuery q;
    if (!q.exec(QLatin1String("create table books(id integer primary key, title varchar, author integer, genre integer, year integer, rating integer, memo varchar)")))
        return q.lastError();
    if (!q.exec(QLatin1String("create table authors(id integer primary key, name varchar, birthdate date)")))
        return q.lastError();
    if (!q.exec(QLatin1String("create table genres(id integer primary key, name varchar)")))
        return q.lastError();

    if (!q.prepare(QLatin1String("insert into authors(name, birthdate) values(?, ?)")))
        return q.lastError();
    QVariant parentiId = addAuthor(q, QLatin1String("Cristian Parenti"), QDate(1920, 2, 1));
    QVariant greeneId = addAuthor(q, QLatin1String("Graham Greene"), QDate(1904, 10, 2));
    QVariant clarkeId = addAuthor(q, QLatin1String("Richard Clarke"), QDate(1948, 4, 28));
    QVariant asimovId = addAuthor(q, QLatin1String("Isaac Asimov"), QDate(1948, 4, 28));
    QVariant gellmanId = addAuthor(q, QLatin1String("Barton Gellman"), QDate(1948, 4, 28));
    QVariant solemavisId = addAuthor(q, QLatin1String("SoleMavis"), QDate(1960, 5, 29));
    QVariant julvegId = addAuthor(q, QLatin1String("Julio De la Vega"), QDate(1960, 1, 10));
    QVariant jitaoId = addAuthor(q, QLatin1String("Ji-Tao Wang"), QDate(1960, 1, 10));
    QVariant pozikrId = addAuthor(q, QLatin1String("Constantine Pozikridis"), QDate(1950, 1, 10));
    QVariant variousId = addAuthor(q, QLatin1String("D. Kutasov, H. Murayama, T. Nakada, N. Nekrasov"), QDate(1945, 1, 10));
    QVariant whiteId = addAuthor(q, QLatin1String("Eleanor White"), QDate(1945, 1, 10));
    QVariant linId = addAuthor(q, QLatin1String("Dr. James C. Lin"), QDate(1945, 1, 10));
    QVariant wallId = addAuthor(q, QLatin1String("Judy Wall"), QDate(1945, 1, 10));
    QVariant smithId = addAuthor(q, QLatin1String("Carol Smith"), QDate(1945,1,9));
    QVariant delgadoId = addAuthor(q, QLatin1String("Jose Delgado"), QDate(1945,1,9));
    QVariant cantwellId = addAuthor(q, QLatin1String("Alan Cantwell"), QDate(1945,1,9));
    QVariant ensignId = addAuthor(q, QLatin1String("Tod Ensign"), QDate(1945,1,9));



    if (!q.prepare(QLatin1String("insert into genres(name) values(?)")))
        return q.lastError();
    QVariant sfiction = addGenre(q, QLatin1String("Science Fiction"));
    QVariant fiction = addGenre(q, QLatin1String("Fiction"));
    QVariant fantasy = addGenre(q, QLatin1String("Fantasy"));
    QVariant nofiction = addGenre(q, QLatin1String("Non-Fiction"));
    QVariant science = addGenre(q, QLatin1String("Science"));
    QVariant website = addGenre(q, QLatin1String("Website"));


    if (!q.prepare(QLatin1String("insert into books(title, year, author, genre, rating,memo) values(?, ?, ?, ?, ?,?)")))
        return q.lastError();
    addBook(q, QLatin1String("The Soft Cage"), 1951, parentiId, nofiction, 3,QLatin1String("The Soft Cage: Surveillance in America From Slavery to the War on Terror (2003), a study of surveillance and control in modern society"));
    addBook(q, QLatin1String("Tropic of Caos"), 1952, parentiId, nofiction, 4,QLatin1String("Climate Change and the New Geography of Violence (2011)"));
    addBook(q, QLatin1String("Angler"), 2009, gellmanId, nofiction, 3, QLatin1String("No comments. Self explanatory" ));
    addBook(q, QLatin1String("Foundation's Edge"), 1982, asimovId, sfiction, 3,QLatin1String("Sometimes those who are supposed to help you are in collussion with those who want to destroy you." ));
    addBook(q, QLatin1String("Forward the Foundation"), 1993, asimovId, sfiction, 3,QLatin1String("I read very good books in this country" ));
    addBook(q, QLatin1String("The Human Factor"), 1940, greeneId, fiction, 4,QLatin1String("This is a unique book, and a must for all those who want to know what really happens in the human heart" ));
    addBook(q, QLatin1String("The Honorary Consul"), 1950, greeneId, fiction, 5,QLatin1String("Did not have too much time to read about history, but Eisenhower, Jefferson and Wallace made a lot of sense to me. They seemed to reflect the best moments of deep thought in this country. Remember, I did not read everything" ));
    addBook(q, QLatin1String("Our Man in Havana"), 1958, greeneId, fiction, 4,QLatin1String("Very good book in a very complicated city" ));
    addBook(q, QLatin1String("Against All Enemies"), 1989, clarkeId, nofiction, 3,QLatin1String("An excellent book. It was the only book missing when my luggage was sent home in Canada. They had retained the luggage for several days after my arrival. Another book that I had was the Al Gore's book about Climate Change and another one that I do not want to mention here. "
                                                                                                "<br><b><font size=4> I believe that these books, plus the media that I used to analyze, were the main reason of me being targeted.</font></b>"));
    addBook(q, QLatin1String("Peacepink.ning.com"), 1951, solemavisId, nofiction, 3,QLatin1String("A website tht describes the use of Mind Control techniques allover the world. <b><font size = 4> It is a must for those who want to understand the evolution of technology and its application in attacks in the XXI Century </b></font>"));
    addBook(q, QLatin1String("Virtual Data"), 1951, julvegId, nofiction, 3,QLatin1String("A combination of documents and website about different techniques of Mind Control and how they are used to affect the Human Behavior <font size = 3 > <b> A must for those who want to understand how some are taking advantage of undisclosed technologies and old rules to destroy people and minds.</b></font>"
                                                                                        "<br>Check http://peacepink.ning.com/profile/julveg and shoppersworld.ueuo.com"));
    addBook(q, QLatin1String("Modern Thermodynamics"), 2010, jitaoId, science, 3,QLatin1String("This the book can be used as a textbook in universities and colleges for the modernization of the discipline of thermodynamics .<font size = 4 > <b> Based on the author's experiences, the modernization of the thermodynamics discipline is not easy, so the book is written in three levels.</b></font>"
                                                                                             "<br><b>The third level is the detailed-discussions in other parts of the whole the book.</b>"));
    addBook(q, QLatin1String("Intrusive Brain Reading Surveillance Technology: Hacking the Mind"), 2010, smithId, science, 4,QLatin1String("Theory, computation and numerical simulation.<font size = 4 > <b>Carole Smith describes claims that neuroscientists are developing brain scans that can read people’s intentions in the absence of serious discussions about the ethical issues this raises.</b></font>"));

    addBook(q, QLatin1String("Fluid Dynamics"), 2010, pozikrId, science, 4,QLatin1String("Theory, computation and numerical simulation.<font size = 4 > <b>This is the only available book that extends the classical field of fluid dynamics into the realm of scientific computing in a way that is both comprehensive and accessible to the beginner .</b></font>"
                                                                                         "<br>A must for practitioners and students in all fields of engineering, computational physics, scientific computing, and applied mathematics."));

    addBook(q, QLatin1String("Nuclear Physics B"), 2010, variousId, science, 4,QLatin1String("Nuclear Physics B focuses on the domain of high energy physics and quantum field theory.<font size = 4 > <b>.. particle physics (including particle physics; cosmology, astrophysics and gravitation; the physics of hadrons; computer simulations in physics; methods in theoretical physics), field theory and statistical systems and physical mathematics</b></font>"
                                                                                             "<br>The emphasis is on original research papers.."));

    addBook(q, QLatin1String("Conspiracy of Fools"), 2010, whiteId, website, 4,QLatin1String("<b>This is a very well documented website that provides important scientific information about what is done in the field of harassment and attacks.<font size = 4 > <b>..</b></font>"
                                                                                             "<br>It is very well focused in real information. There are no hypothesis here"));
    addBook(q, QLatin1String("Too Big to Fail"), 2010, variousId, science, 4,QLatin1String("Nuclear Physics B focuses on the domain of high energy physics and quantum field theory.<font size = 4 > <b>.. particle physics (including particle physics; cosmology, astrophysics and gravitation; the physics of hadrons; computer simulations in physics; methods in theoretical physics), field theory and statistical systems and physical mathematics</b></font>"
                                                                                             "<br>The emphasis is on original research papers.."));

    addBook(q, QLatin1String("www.raven1.net"),2010, whiteId, science, 4,QLatin1String("Excelent Website.<font size = 4 > <b>Provides a lot of scientific information about numerous techniques of attack</b></font>"
                                                                                             "<br>The quality of information of this website is very difficult to match"));
    addBook(q, QLatin1String("Aerial Mind-Control The Threat to Civil Liberties"), 2010, wallId, science, 4,QLatin1String("Hard hitting article by Judy Wall, who is NOT a mind control"
                                                                                                                                                 "victim and in fact avoids victim testimonials in favour of only factual objective material.</b></font>"
                                                                                             "<br>NEXUS Magazine, October-November 1999"));
    addBook(q, QLatin1String("Biological Structures Which Can AMPLIFY Pulsed-Microwave  Voice to Skull  Signals"), 2010, linId, science, 4,QLatin1String("<b><font>This book helps to underestand the non-ionizing radiation and let us know how they can damage too.</b></font>"
                            "<br>It is one of the first and best documented books on the subject.."));

    addBook(q, QLatin1String("Intrusive Brain Reading Surveillance Technology: Hacking the Mind"), 2010, smithId, science, 4,QLatin1String("Carole Smith describes claims that neuroscientists are developing brain scans that can read people’s intentions in the absence of serious discussions about the ethical issues this raises"
                                                                                                                                           ".</b></font>"));
    addBook(q, QLatin1String("Dr José Delgado.Director of Neuropsychiatry, Yale University Medical School Congressional Record, No. 26, Vol. 118 February 24, 1974."), 2010, delgadoId, science, 4,QLatin1String("We need a program of psychosurgery for political control of our society. The purpose is physical control of the mind. Everyone who deviates from the given norm can be surgically mutilated"
    "The individual may think that the most important reality is his own existence, but this is only his personal point of view. This lacks historical perspective. Man does not have the right to develop his own mind. "
    "This kind of liberal orientation has great appeal. We must electronically control the brain. Someday armies and generals will be controlled by electric stimulation of the brain."
    ".</b></font>"));

    addBook(q, QLatin1String("THE HUMAN RADIATION EXPERIMENTS."), 2001, cantwellId, science, 4,QLatin1String("In preparing America for nuclear attack during the Cold War years following World War II, thousands of US citizens became the innocent victims of over 4,000 secret and classified radiation experiments "
    "<b><font>In the nuclear arms race, government doctors and scientists brainwashed the public into believing low dose radiation was not harmful.. "
    "Totally ignored was the knowledge that the radiation from nuclear fallout could lead to an increased risk of cancer, heart disease, neurological disorders, immune system disease, reproductive ."
    " abnormalities, sterility, birth defects, and genetic mutations which could be passed on from generation to generation.</b></font>"));


    addBook(q, QLatin1String("A new book: U.S. RADIATION TESTING ON HUMANS"), 2010, smithId, science, 4,QLatin1String("At least some officials knew what they were doing was unconscionable and were ducking the consequences and covering their tails. A recently leaked Atomic Energy Commission "
    "It is desired that no document be released which refers to experiments with humans and might have adverse effect on public opinion or result in legal suits"));

    addBook(q, QLatin1String("DUCK AND COVER UP: U.S. RADIATION TESTING ON HUMANS"), 2010, smithId, science, 4,QLatin1String("At least some officials knew what they were doing was unconscionable and were ducking the consequences and covering their tails. A recently leaked Atomic Energy Commission "
        "It is desired that no document be released which refers to experiments with humans and might have adverse effect on public opinion or result in legal suits"));


    return QSqlError();
}

#endif
