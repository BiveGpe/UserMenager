### v0.6 ###
* Adds api documentation
* Adds app documentation
* Adds own routing strategy to send url params as query params

### v0.5.3 ###
* Phpstan with config file and level 1

### v0.5.2 ###
* Adds Validation for:
* * Request data
* * Query data
* * Response from DB data
* Refactor SQL to not download deleted data from DB

### v0.5.1 ###
* Adds Authentication
* Adds Env variables
* Use Standard Slim Error Handler
* Refactor of App initialization

### v0.5 ###
* Adds connection to Database
* Adds Migration files
* Adds seeds files
* Extend GetUserById Action with Database data

### v0.4 ###
* Adds PhpUnit and simple test for Action ValueObject
* Adds CsFixer with config

### v0.3.1 ###
* Adds simple functionality to getUserById
* * only with id equals to 5

### v0.3 ###
* Adds ADR
* Rebuild of RequestMenager config
* Fill classes with simply metods
* * DTOFactory
* * QueryFactory
* * ResponseConstraints
* * ResponseConstraints
* Make QueryRepository to all UserCategory
* Implement DTOFactory and QueryRepository as params of Service
* Make Abstract Classes
* * AbstractDTO
* * AbstractQuery
* Fill interfaces with methods
* * ConstraintsInterface
* * DTOFactoryInterface
* * ServiceInterface
* Rebuild ClassStash
* Build Body of RequestMenager and empty Validator

### v0.2 ###
* Adds php-di/slim-bridge
* Adds new folders to autoload in composer
* Adds Class ContainerDependencies
* * Adds first Dependencies
* Adds Class ContainerBuilder
* Rebuild index.php to build container and bridge container to build App
* Adds Class RequestControllerConfig
* Adds Class ClassStash
* Adds Class RequestMenager
* * Adds Class Config
* * Adds Class ConfigProvider
* Adds ValueObjects
* * Action
* * Category
* Expand Class UserController
* * add Param RequestMenager and constructor
* * Rebuild function getUserByID
* * * add Category and Action to Request 
* * * add use manageRequest form RequestMenager
* Add empty Classes for GetUserByID Action
* * DTOFactory
* * DOC
* * Query
* * QueryFactory
* * Repository
* * RequestConstrains
* * Service
* * UserDTO
* Add empty Interfaces
* * CQFactoryInterface
* * DocInterface
* * RepositoryInterface
* * RequestConstraintsInterface
* * ServiceInterface

### v0.1.2 ###
* Adds package php-di/php-di

### v0.1.1 ###
* Adds ext xDebug

### v0.1 ###
* Early Folders Structure
* Cleanup external packages
