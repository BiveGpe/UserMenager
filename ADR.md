#### Problem:
* Package to database migration.
#### Solution:
* Use Phinx.
#### Why:
* Phinx is a simple and easy to use migration tool with big community.

## --- 
#### Problem:
* Use one Repository for all communication with database, or separate Repository to each request.
#### Solution:
* Use two Repository, CommandRepository and QueryRepository per Category.
#### Why:
* Each Category can have a different data source, and is easier to manage two repos with logic separation then one big.  
