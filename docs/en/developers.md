# SilverStripe Easy Read developer guide

All page objects can have one EasyReadDocument object. An EasyReadDocument has many EasyReadLines that can be extended to create any number of line types. The available types include definitions, lists, headings and paragraphs. You can extend the EasyReadLine class to add your own types if required.

## Choose the DataObjects

You choose which DataObjects the Easy Read documents can be created for by adding the EasyReadExtension to the desired objects. For simplicity you can add the extension to all objects that extend the Page object.

**./app/_config/easyread.yml**
```
---
Name: silverstripe-easyread
---
Page:
  extensions:
    - Earthwytch\SilverStripeEasyRead\EasyReadExtension
```

## Image location

Images for Easy Read documents will upload to the default asset folder. If you would like to customise this to prevent making a mess in your uploads folder then you can set the location in the config.

**./app/_config/easyread.yml**
```
---
Name: silverstripe-easyread
---

Earthwytch\SilverStripeEasyRead\EasyReadDocument:
  image_folder: '/Images/EasyRead/Cover'

Earthwytch\SilverStripeEasyRead\EasyReadLine:
  image_folder: '/Images/EasyRead/Content'
```


