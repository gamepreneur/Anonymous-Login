Anonymous login
version 1.0
by Samuel Champagne

This work is licensed under the Creative Commons Attribution-ShareAlike 3.0 Unported License. To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/3.0/ or send a letter to Creative Commons, 444 Castro Street, Suite 900, Mountain View, California, 94041, USA.

----TABLE OF CONTENTS----

1 - documentation
2 - changelog
3 - plans


----1. DOCUMENTATION----
newlogin.php
- this file is used for the users to create new logins. These logins are in the form of bookmarklets (javascript bookmarks). This was done so that the login information could be accessed from any site. The original draft had newlogin.php set a cookie with the login string. I shortly afterward remembered that the cookie would be tied to that domain only. so the fix to this problem was a bookmarklet that sets the cookie for the site currently in focus. another reason for this was so that the user would not have their information used without their consent.

login.php
- this file is used for checking and reading the cookie set by the bookmarklet. it then splits the string into the individual variables. these variables are:
--first name ($firstname)
--last name ($lastname)
--date of birth
----year ($year)
----month ($month)
----day ($day)
--gender ($gender)
--time of login creation ($creation)
time of login creation is meant to be a way to prevent duplicates, e.g. useful when creating a database entry.


----2. CHANGE LOG----
NOV 20 2011 - newlogin.php and login.php were posted to github
NOV 30 2011 - readme file created


----3. PLANS----
(NOT IN ORDER)
-- encyption e.g. AES to add security
-- an interface for newlogin.php









