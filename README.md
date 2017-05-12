# _Blast from the Past_

#### By _**Sarah Leahy and Michaela Davis**_   &nbsp; 5.12.17


## Description

 This website was created using Drupal 8, a PHP framework. It contains two custom modules: Ajax View and Surprise Me. Ajax View is an Ajax enabled view that allows the user to sort articles by tags.

## Prerequisites

You will need the following things properly installed on your computer:

* [Git](https://git-scm.com/) v2
* [MAMP](https://www.mamp.info/en/downloads/) v4


## Installation

```bash
git clone https://github.com/Michaela-Davis/drupal_cassette-store.git
cd drupal_cassette-store
```

* Click on Preferences in your MAMP window and set your document root to the top level of your repository.

## Import the Database

* Open phpMyAdmin and click on the "Import" tab.
  * Leave all the default settings and make sure the character set is "utf-8".
  * Now click on the "Choose File" button next to "Browse your computer" and select the .sql.zip file included in the sites/db-backup folder. It's okay to leave it zipped.
  * Click the "Go" button on the bottom left.

* Create the Database User
  * After importing the .sql.zip file, select the "Privileges" tab and click on "Add User".
  * Use the username `admin` and password `admin`

* After importing the database, if you have any trouble logging in with your Site Maintenance account, clear your browser's cookies by clearing the browser history.


## Running / Development

* Visit Blast from the Past at [http://localhost:8888](http://localhost:8888).
* Use the username `admin` and password `admin` to login to the Blast from the Past site


### License

*MIT license*


Copyright (c) 2017 Sarah Leahy and Michaela Davis All Rights Reserved.
