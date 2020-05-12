https://www.apachefriends.org/index.html
프로그램 설치

C드라이브 - xampp - htdocs 위치에 기존파일들 전부 삭제, zip파일 압축해제

설치 후 sql, aphache 두개만 start ->  aphache start 안되면 cofig - https-ssh.config - 포트번호 변경 (3306 등)



mysql 접속해서

mysql -u root -p   -> 엔터 로그인(암호 없음)

create database webdb;
grant all privileges on webdb.* to itbank@localhost identified by 'itbank';
use webdb;
create table member(No int auto_increment primary key, ID varchar(20) not null, PW varchar(50) not null, Name varchar(20) not null, Phone varchar(50) not null, Addr varchar(50) not null, Mail varchar(50) not null);
desc member;

create table board(No int auto_increment primary key, Comment varchar(200) not null, userid varchar(50) not null, date timestamp not null);
desc board;


인터넷 주소창 -> localhost
1. 회원가입 진행 - 로그인 확인
2. mypage - 첫번째 게시글 - 댓글 입력 확인






--------------------------------------------
==xampp DB 한글 깨짐 현상 해결==


C:\xampp\mysql\bin

mysql.exe 덮어씌우기.

DB 확인

---------------------------------------------
