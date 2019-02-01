<?php

/**
* 
*/
session_start();
require('Model.php');
class UserModel extends Model
{
	public function register()
	{
		if (isset($_POST['reg'])) {
			
			$username= $_POST['username'];
			$pass = $_POST['password'];
			$fname = $_POST['fname'];
			$lname=$_POST['lname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$reg= $_POST['regdate'];
			$password= sha1($pass);
			//$prof = $_POST['professionid'];
			if(strlen($username)<9||strlen($username>30)){
				
			$_SESSION['error']="Username should contain at least 8, and at most 30 characters";
			 
			
				}

				//else if (!ctype_alnum($username)) {
				//$_SESSION['error']="Username or Title contains invalid characters";
				
			//}
		else if(strlen($pass)<8){
			$_SESSION['error']="Password should be 8 characters or more";
			

			}

		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$_SESSION['error']="Email is in wrong format";
			
			
		}


		else if(strlen($phone)>13||strlen($phone<9))
		{
			$_SESSION['dterror']="Insert a valid phone number(10 digits)";
					
		}


		else{

			$this->prepareQuery("INSERT INTO tbusers(username, password, fname, lname, email, phone, regdate, professionid) VALUES('$username', '$password', '$fname', '$lname', '$email', '$phone', '$reg', '$prof') ");
			$this->runQuery();
			if ($this->confirmEntry()) {
				header("Location: signin.php");
			}

				}

		}
	}

	public function profession()
	{
		
		$this->prepareQuery("SELECT * FROM tbprofession");
		$this->runQuery();
		$result= $this->resultSet();

		
				
				return $result;

			}
	
	public function login()
	{
		
	if (isset($_POST['signin'])) {
	
	$uid= $_POST['uid'];
	$pass= $_POST['password'];
	$password=sha1($pass);
	$this->prepareQuery("SELECT * FROM tbusers WHERE email='$uid' AND password='$password'");
	$this->runQuery();
	$result = $this->singleResult();

	if ($result) {
		$_SESSION['user']= $result['username'];
		$_SESSION['id']=$result['userid'];
		$_SESSION['pid']=$result['professionid'];
		if ($result['professionid']==1) {
			header("Location: specialistforum.php");
		}
		else
		header("Location: index.php");
	}
	else
		{
			header("Location: signin.php");
			$_SESSION['lerror']= "Your email or password is wrong. Please try again";

		}

	}


	}

	public function speconsult()
	{
		if (isset($_POST['consult'])) {
			$level = $_POST['consultationlevel'];
			$topic = $_POST['topicid'];
			$posted=$_POST['posted'];
			$question= $_POST['question'];
			$user=$_POST['userid'];
			$this->prepareQuery("INSERT INTO tbquestions (userid, topicid, question, posted, consultationlevel) VALUES('$user', '$topic', '$question', '$posted', '$level')");
			$this->runQuery();
			if ($this->confirmEntry()) {
				header("Location: speconsult.php");
			}
			

		}
	}
	public function genConsult()
	{
		if (isset($_POST['general'])) {
			$question = $_POST['question'];
			$posted=$_POST['posted'];
			$user = $_POST['userid'];
			$topic= $_POST['topicid'];
			$this->prepareQuery("INSERT INTO tbquestions (userid, topicid, question, posted) VALUES('$user', '$topic', '$question', '$posted')");
			$this->runQuery();
			if ($this->confirmEntry()) {
				header("Location: consult.php");
			}
			
		}
	}
	public function forum()
	{
		$this->prepareQuery("SELECT * FROM tbquestions ORDER BY posted DESC LIMIT 3");
		$this->runQuery();
		if ($this->resultSet()) {
		return $this->resultSet();
		}
		else return "bad";
	}

	public function answer()
{
	if (isset($_POST['answer'])) {
		$user=$_POST['userid'];
		$posted = $_POST['posted'];
		$answer = $_POST['answerr'];
		$quiz = $_POST['quid'];
		$pid = $_POST['professionid'];
		$this->prepareQuery("INSERT INTO tbanswers(questionid, userid, professionid, answer) VALUES ('$quiz', '$user', '$pid','$answer')");
		$this->runQuery();
		if ($this->confirmEntry()) {
		header("Location: forum.php");
		}
		
	}
}
public function comment()
{
	if (isset($_POST['comment'])) {
		$user=$_POST['userid'];
		$posted = $_POST['posted'];
		$comment = $_POST['commentt'];
		$quiz = $_POST['quid'];
		$this->prepareQuery("INSERT INTO tbqstcomments( questionid,userid,posted,comment) VALUES ('$quiz', '$user', '$posted','$comment')");
		$this->runQuery();
		if ($this->confirmEntry()) {
		header("Location: forum.php");
		}
	}
}

public function flag()
{
	if (isset($_POST['flag'])) {
		$user=$_POST['userid'];
		$posted = $_POST['posted'];
		$flag = $_POST['flagid'];
		$reason= $_POST['reason'];
		$quiz = $_POST['quid'];
		$this->prepareQuery("INSERT INTO tbuserflags( flagid, userid, reasonid,flagged) VALUES ('$flag', '$user', '$reason','$posted')");
		$this->runQuery();
		if ($this->confirmEntry()) {
		header("Location: forum.php");
		}
		
	}
}

public function postq()
{
	if (isset($_POST['postquiz'])) {
		$user=$_POST['userid'];
		$posted = $_POST['posted'];
		
		$topic = $_POST['topicid'];
		
		$quiz = $_POST['question'];
		if (!empty($quiz)) {
			$this->prepareQuery("INSERT INTO tbquestions(userid, topicid, question, posted) VALUES ('$user','$topic', '$quiz', '$posted')");
			$this->runQuery();
			if($this->confirmEntry())
				header("Location: forum.php");
			else
				$_SESSION['qerror']="System Error Please Try again Later";
		}
		else
		{
		$_SESSION['qerror']="Question cannot be empty";	
		}
		header("Location: postq.php");
	}
}

}