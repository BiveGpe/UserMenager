### v0.4 ###
* Adds PhpUnit and simple test fot Action ValueObject
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
