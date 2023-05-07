# User Controller
Application

## Documentation
App has documenation for api and app itself.
To generate api documentation run:
```bash
    php8.1 docgen.php
```

```bash
    sudo redocly build-docs core -o docs/apidoc.html --title ApiDoc
```

To generate app documentation run:
```bash
    doxygen Doxyfile
```
Documentation is generated in docs folder.
available at: [ApiDoc](http://usermenager.domain.vm:2137/apidoc/) and [AppDoc](http://usermenager.domain.vm:2137/doc/)
