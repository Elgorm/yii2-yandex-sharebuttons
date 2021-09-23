Yii2 Yandex Share Buttons widget
====================

This widget added from your site share buttons from Yandex

* [Installation](#installation)

### Share buttons for next services:


    *Blogger;
    *Delicious;
    *Digg;
    *Evernote;
    *Facebook;
    *Google+;
    *LinkedIn;
    *Живой Журнал;
    *Мой Мир;
    *Одноклассники.ru;
    *Pinterest (требуется указать атрибут image);
    *Pocket;
    *Surfingbird;
    *Renren;
    *Sina Weibo;
    *Surfingbird;
    *Tencent Weibo;
    *Tumblr;
    *Twitter;
    *Viber;
    *ВКонтакте;
    *WhatsApp.


### Resources

* [Oficial API  Yandex share Button](https://tech.yandex.ru/share/doc/dg/add-docpage/)
* [Yii Framework](http://yiiframework.com/)

### Requirements

* Yii 2.0 or above


# Installation

This library can be found on [Packagist](https://packagist.org/packages/elgorm/yii2-yandex-sharebuttons).
The recommended way to install this is through [composer](http://getcomposer.org).

Edit your `composer.json` and add:

```json
{
		"require": {
				"elgorm/yii2-yandex-sharebuttons": "^1.0@stable"
		}
}
```

or run in console:

```
composer require elgorm/yii2-yandex-sharebuttons
```

# Usage

Add this code in page for share:

```php
use elgorm\sharebuttons\ShareButtons;

...
<?= ShareButtons::widget(
    [
        'clientOptions'=>[
            'services' => 'facebook,vkontakte,twitter', //attributes from official without preffix "data-"
            'size' => 's',
            'lang' => 'en',
            'title:twitter' => 'Yandex', //a different title for the different networks
            'id' => 'id1', // not added preffix data-
            'class' => 'class1 class2', // not added preffix data-
            'tag' => 'span', //default "div" 
        ]
    ]
);?>
...
```

Available services:

    *blogger — *[Blogger](https://blogger.com)
    *collections — [ Яндекс.Коллекции](https://yandex.ru/collections/)
    *delicious — [Delicious](https://delicious.com)
    *digg — [Digg](http://digg.com/)
    *evernote — [Evernote](https://evernote.com)
    *facebook — [Facebook](https://www.facebook.com/)
    *gplus — [Google+](https://plus.google.com/)
    *linkedin — [LinkedIn](https://www.linkedin.com/)
    *lj — [Живой Журнал](http://www.livejournal.com/)
    *moimir — [Мой Мир](https://my.mail.ru/)
    *odnoklassniki — [Одноклассники.ru](http://ok.ru/)
    *pinterest — [Pinterest](https://www.pinterest.com/) (требуется указать атрибут image)
    *pocket — [Pocket](https://getpocket.com)
	*qzone — [Surfingbird](http://surfingbird.ru/)
    *reddit — [ Reddit](https://www.reddit.com/)
    *renren — [Renren](http://www.renren.com/)
    *sinaWeibo — [Sina Weibo](http://www.weibo.com)
    *skype — [ Skype](https://www.skype.com/)
    *surfingburd — [Surfingbird](http://surfingbird.ru/)
    *telegram — [Telegram](https://telegram.org/)
    *tencentWeibo — [Tencent Weibo](http://t.qq.com/)
    *tumblr — [Tumblr](https://www.tumblr.com/)
    *twitter — [Twitter](http://twitter.com/)
    *viber — [Viber](https://www.viber.com/ru/)
    *vkontakte — [ВКонтакте](https://vk.com/)
    *whatsapp — [WhatsApp](https://www.whatsapp.com/)


# License

The extension was released under the [Apache-2.0](https://opensource.org/licenses/Apache-2.0), so you'll find the latest version on [GitHub](https://github.com/Elgorm/yii2-yandex-sharebuttons).

# Donations
[![Beerpay](https://beerpay.io/Elgorm/yii2-yandex-sharebuttons/badge.svg)](https://beerpay.io/Elgorm/yii2-yandex-sharebuttons)

![Etereum](https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png?_=13149a1) Ethereum (ETH): 0x0ebA6D90697e20c2b9C030A6a2EDCde4D771a6ba
