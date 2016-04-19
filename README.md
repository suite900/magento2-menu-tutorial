# magento2-menu-tutorial
Magento2 module tutorial: Admin menu

Installation
----------
Add this in your root magento composer.json
```javascript
{
  "repositories": [
    .....
    {
      "type": "vcs",
      "url": "https://github.com/suite900/magento2-menu-tutorial"
    }
  ],
  
  "require": {
    .....
    "suite900/magento2-menu-tutorial": "dev-master"
  }
}
```

Then run:
```php
composer update
```

Also run a magento command in order to deploy static content
```php
php bin/magento setup:static-content:deploy
```

Lesson
-------
- Menu item
- ACL
- Css/js in admin
- Menu icon