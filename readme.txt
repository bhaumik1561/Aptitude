Database

1.test_lr:test questions
2.test_vr:test questions
3.test_qr:test questions
4.user:Details about users
5.logical_reasoning-->Question bank
6.verbal_reasoning-->Question bank
7.quantitative_reasoning-->Question bank
8.back-->0th userid stores cutoff and rest of userid stores status of user(not given test,disqualified,given test) values(0,1,2)
9.result: storing result of each section
10.test_date: test starting date, result date , test expiry date in sequence






-->Roll no. 40
1. addque.php:
	First session is started and check if user has logged in or not.If not then it is redircted to form page.
	First the user has to select in which section do u want to add by the drop down list.
	In this the user is allowed to add the question in the database by entering question and their value of ans and the correct ans. this question is directly added in databse and is redirected to aq.php

2. aq.php
	First session is started and check if user has logged in or not.If not then it is redircted to form page.
	In this first it is checked whether all the details have been added or not.
	If added then connection is being set up and all the option are taken into variable by "addslashes". Work of addslashes is to avoid conflict when data is being added into the database of the inverted commas.
	Then all the values are added into the respective database by executing the insert query. for eg if we select lodical reasoning themn it will be added into the databse called logical_reasoning
	Now this has been added and it prints the message of succefully added on "addque.php" page.
	Now if all the values are not set then it will be redirected to the previous page and msg of fill all the fields of question will be printed.

3. addtestque.php:
	First session is started and check if user has logged in or not.If not then it is redircted to form page.
	First the user has to select in which section do u want to add by the drop down list.
	In this the user is allowed to add the question in the tes directly by entering question and their value of ans and the correct ans. this question is directly added in databse and is redirected to aq.php

4. atq.php
	First session is started and check if user has logged in or not.If not then it is redircted to form page.
	In this first it is checked whether all the details have been added or not.
	If added then connection is being set up and all the option are taken into variable by "addslashes". Work of addslashes is to avoid conflict when data is being added into the database of the inverted commas.
	Then all the values are added into the respective test topic by executing the insert query. for eg if we select logical reasoning themn it will be added into the databse called test_lr
	Now this has been added and it prints the message of succefully added on "addtestque.php" page.
	Now if all the values are not set then it will be redirected to the previous page and msg of fill all the fields of question will be printed.

5. erque.php:
	In this file there are mainly two html form
	In the first form in the drop down list we have to check whether which topic is being seleced
	On the basis of the topic being selected by the admin the and submitting the ok button the radio button will appear whether to edit or delete on the full list of question in the test and directed to the action.php

Rollno.-->39
6. action.php:
	In this the condition will be checked whether deleted or edit.
	If deleted then by executing delete queery it will deleted from the database
	if edit then using update query it will be updated in the database.
	From here it will go to edit.php

7. edit.php:
	Here connection is set up and all the value are updated by the help of the id as question number and afer this it is printed that question succesfully edited. 

8. ertestque.php:
	In this file there are mainly two html form
	In the first form in the drop down list we have to check whether which topic is being seleced
	On the basis of the topic being selected by the admin the and submitting the ok button the radio button will appear whether to edit or delete on the list of question appearing  in the test and directed to the action2.php

9. action2.php:
	In this the condition will be checked whether deleted or edit.
	If deleted then by executing delete queery it will deleted from the test
	if edit then using update query it will be updated in the test.
	From here it will go to edit2.php

10. edit2.php:
	Here connection is set up and all the value are updated by the help of the id as question number and afer this it is printed that question succesfully edited. 


Roll no.-->37
11.setcutoff.php->This is a simple html page having an input textbox(value of cutoff in percentile) in a form. The form redirects to co.php on submitting .



12.co.php(cut-off)->This file is to set the value of cut-off and its value is stored in table named back.And it also decides that whether the user is qualified or not and update the table result accordingly. 


13.disprank.php(display rank)->This file shows two links, subjective rank and overall rank.


14.disprank1.php(subjective rank)->This page will show the rank list of the users who gave test as per the subjects ie. verbal, logical,quantitative reasoning sections.
				This will display a table with column column no,userid,name,test type(out of 3 sections),percent.

16.disprank2.php(overall rank)->This page shows the rank lost on the basis of total marks scored by the user(sumation os marks of three sections).
	
		    This page also calculates percentile of the user by a formula.This will output a table with columns column no,name,percent,percentile.
Roll no.-->38

17.Manage Test


 first ADD QUESTIONS From Question BANK -->  createtest.php : will add  multiple  questions .(NOTE : WHILE ADDING ID MAY NOT BE IN ORDER ..BUT DONT WORRY CLIENT SIDE WILL DISPLAY ALL QUESTIONS IN ORDER)   
                                                ct2.php: back end file which helps add  multiple  questions.
 Delete Test Questions-->deletetest.php: multiple delete
                dt.php: back end file which helps delete  multiple  questions.



 Schedule Test and Result--> Admin can set interval between which all registered users can login and give test.
                           
 viewque.php--->displays all test questions



18.viewresult.php->This will output a page having table with the following columns:column no,username,percent,percentile,qoruq(qualification status).   



CLIENT SIDE

Roll no.-->41,42,43,44,45

index.php:
for user login


register1:
for registration 

captchafont.php
for captcha in registration

registered.php:
validates registration

login.php: 
back end file 
checks whether user gave test or not and redirects to 
newlogin.php (if user has not given test yet)
finish.php (if user has given test)



newlogin.php:
home page for new user showing instructions and link to begin test


profile.php:
shows profile of user


date.php:
it will check whether the current time is in time interval as set by user 

noway.php:
if user presses back button ...he will be redirected to this page and will be disqualified


begin2.php:
shows test questions ,has a timer of 30 min and submit button

noway2.php
doesnt allow user to go to test page after submitting
final.php:
shows the response of user in the test along with his marks and result date

finish.php:
User has given test so login.pho will redirect user to  finish.php
if result date and time set by admin is before current date and time then it will redirect to result.php
else it will display result not generated ...

result.php
shows result


profile2.php
same as profile.php


