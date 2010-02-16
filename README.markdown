# Russian
 Symphony CMS Language File
 
IBCICO Development [Symphony CMS Russian Support] (http://symphony-cms.ru) [Symphony CMS](http://www.symphony-cms.com) in Russia!
 
- Version: 1.0.1
- Author: Bogdanov Igor, i.bogdanov@ibcico.com 
- Build Date: 16th February 2010
- Requirements: Symphony CMS 2.0.x
 
## Installation
 
*Option 1.*
 
This option allows authors to specify personal preferences for a language and allows you to change the system language in your system preferences through the administration panel. 
 
Download the [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager) and install this extension. This language file is supposed to be included in the [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager) in the near future. If it is not available yet, move the `lang.ru.php` file to the `/extensions/localisationmanager/lang` directory in your [Symphony CMS](http://www.symphony-cms.com) installation.
 
After installing Localisation Manager successfully, you'll find a new setting in your preferences allowing you to switch the system language. Authors can override this global preference with a custom setting in their profiles.
 
*Вариант 1.*

Данный вариант установки позволяет пользователям устанавливать свои языковые предпочтения и изменять язык системы в административной панели.

Необходимо скачать расширение [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager) и установить его. Скорее всего данный языковой файл уже будет включен в расширение [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager). Если русский язык еще не доступен в [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager), скопируйте файл 'lang.ru.php' в директорию `/extensions/localisationmanager/lang` в месте установки [Symphony CMS](http://www.symphony-cms.com). 

После установки [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager) в настройках системы появится возможность изменять язык. Языковые настройки могут быть изменены каждым отдельным пользователем для себя лично по своему усмотрению.


 
*Option 2.*
 
This option works without the [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager) and is less flexible. It only allows you to set the system language manually in the configuration file, and does not allow authors to specify a personal preference for a language.
 
Move `lang.ru.php` to the `/symphony/lib/lang` directory. Open `/manifest/config.php` and look for `'lang' => 'en'`. Replace this line with `'lang' => 'ru'`.
 
*Вариант 2.*

Данный вариант установки можно использовать без установки расширения [Localisation Manager](http://github.com/nilshoerrmann/localisationmanager). Однако он позволяет изменить только глобальные языковые настройки без возможности выбора языка каждым отдельным пользователем.

Скопируйте  'lang.ru.php' в директорию '/symphony/lib/lang'. Откройте для редактирования файл '/manifest/config.php' и найдите там строчку `'lang' => 'en'`. Замените её на `'lang' => 'ru'`.
 
 
## Contributing
 
If you like to contribute an updated language file, please fork this repository and commit your changes.

## Внесение изменений

Если Вы хотите внести изменения в языковой файл, используйте данный репозиторий.  
 
## Change log

- 1.0.1 - added Medithek extension compatibility
- 1.0.1 - внесены изменения для совместимости с расширением Mediathek

## Изменения
 
### Version 1.0.1, 16th February 2010: 
 
- Initial release.