create table USERS (
user_id int auto_increment primary key,
user_name varchar (30) not null,
email varchar (50) not null
);

create table assessment (
assess_id int auto_increment primary key,
text_assessment varchar (30) not null
);

alter table assessment
add constraint FK_ASSESS_USERS
foreign key (assess_id)
references USERS (user_id);

insert into USERS (user_name, email) values
('Alex', 'alextop1971@gmail.com');

insert into assessment (text_assessment, assess_value) values
('Alex', 'alextop1971@gmail.com');


select *
	from USERS
    order by user_id;
select *
	from assessment
    order by assess_id;

/* ---- All records USERS + ASSESSMENT ----------*/    
select USERS.user_id, USERS.user_name as 'Name assessora', USERS.email as 'Email', assessment.assess_id, assessment.text_assessment as 'Recomended', assessment.assess_value as 'Value'
from USERS
inner join assessment
on USERS.user_id = assessment.assess_id
group by USERS.user_id
order by USERS.user_id;

select USERS.user_id, USERS.user_name as 'Name assessora', USERS.email as 'Email', assessment.text_assessment as 'Recomended', assessment.assess_value as 'Value'
from USERS
inner join assessment
on USERS.user_id = assessment.assess_id
group by USERS.user_id
order by USERS.user_id;

/* ---- Avarage assessment value----------*/
select avg (assessment.assess_value) as 'AVG_Value'
from assessment
where assess_id >3;

/*----- Filling update dates----*/    
update USERS
	set user_name = 'Sofia',
		email = 'Sofia_Pretty_Jener@gmail.com'
    where user_id = 2;
    
alter table assessment
add column assess_value int (3);


insert into assessment (assess_id, text_assessment, assess_value) values
(1, 'This is resume its good', 60);

/*--- команда очищення всієї бази----
TRUNCATE USERS; TRUNCATE assessment;