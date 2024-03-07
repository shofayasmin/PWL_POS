G. Questions
Answer the following questions according to the understanding of the material above
1. In Practicum 1 - Step 5, what is the function of the APP_KEY in the Laravel .env setting file?
=> Used for encryption i.e. securing sensitive data such as user sessions, passwords, and cookies

2. In Practicum 1, how do we generate value for APP_KEY?
=> Using php artisan key:generate command.

3. In Practicum 2.1 - Step 1, by default how many migration files does Laravel have? and what are the migration files for?
=> Has 4 migration file, 
1st migration is to create a users table in the database.
2nd migration to create a password_reset_tokens table in the database.  
3th migration to create a failed_jobs table in the database.
4th migration to create a personal_access_tokens table in the database.

4. By default, the migration file contains the code $table->timestamps();, what is the purpose/output of the function?
=> The purposes are to create two columns in database table 'created_at' and 'updated_at' automically

5. In the Migration File, there is a function $table->id(); What type of data does the function return?
=> To create an auto-incrementing primary key columnn in databse table and the data will be unique data

6. What is the difference between the migration results in the m_level table, between using $table->id(); by using $table->id('level_id'); ?
=> The difference is that when we use $table->id();, the column name will be the default 'id' and when using $table->id('level_id');, the column name will be 'level_id' and the function remains the same, which is to create an auto-increment column for the primary key.

7. In migrations, what is the ->unique() function used for?
=>To determine that a column in a database table must have a unique value.

8. In Practicum 2.2 - Step 2, why does the level_id column in the m_user table use $tabel->unsignedBigInteger('level_id'), while the level_id column in the m_level table uses $tabel->id('level_id') ?
=>If using $table->unsignedBigInteger('level_id') to indicate that it is a foreign key, while $table->id('level_id') to indicate that it is a primary key.

9. In Practicum 3 - Step 6, what is the purpose of the Hash Class? and what does the Hash program code mean::make('1234');?
=>Used for securely hashing passwords and other sensitive data.

10. In Practicum 4 - Step 3/5/7, in the query builder there is a question mark (?), what is the use of the question mark (?) of these?
=>Is used to place parameters in an SQL query

11. In Practicum 6 - Step 3, what is the purpose of writing protected code $table = 'm_user'; and protected $primaryKey = 'user_id'; ?
=>To identify the relevant database table and primary key column for operations such as fetching, updating, or deleting records via Eloquent ORM.

12. In your opinion, where is it easier to use in performing CRUD operations to the database (DB Façade / Query Builder / Eloquent ORM) ?
=>Query builder because The syntax is more similar to regular SQL. 