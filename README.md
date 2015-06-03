Project Name
====

Use this as project starter for Silex 2. Start:

```bash
export DOMAIN_NAME='www.mycompany.com'
export VENDOR_NAME='My Company'
export VendorName='my-company'
export vendor_name='mycompany'
export PROJECT_NAME='My Project'
export ProjectName='my-project'
export project_name='my_project'

curl -fsS https://gist.githubusercontent.com/andytruong/191b6834b18390f8dd53/raw/silex-install.bash | bash
```

## Built-ins features

1. Twig/Bootstrap/Google analytics/…
- Doctrine Cache, DBAL, ORM
- BernardPHP message queue
- SF2 Console (make your command as service, name it as `anything.command.the_name`, then run `php cli.php`, you see your command is auto registered)
