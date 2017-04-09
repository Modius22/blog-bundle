# blogBundle
Blog Bundle for Symfony 3

## status

### Done
- Display article
- Display create date
- Include Sonata Admin Bundle

## Open
- Tagging
- Categories

## Requirement
- Sonata Admin Bundle
- CKEditorBundle

##Installation
``` bash
$ composer require --dev modius22/blog-bundle
```

```php
<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new modius22\BlogBundle\BlogBundle(),
        );
        // ...
        return $bundles;
    }
    // ...
}

```
Symfony >= 3.x
``` bash
$ php bin/console assets:install --symlink --relative
$ php bin/console doctrine:schema:update --force
$ php bin/console cache:clear
```
