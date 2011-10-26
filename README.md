Abstract
========

This is an I18N library with some non-standard features. Use at your own risk under the BSD license.

Thanks to the DoclerWeb guys for their help. Please visit www.dotroll.com and www.doclerweb.hu

Components
==========

I18N_Country
------------

This class has two purposes. First it contains a lot of information on the world's countries, most notably the short and official *country names* in English and Hungarian as well as in every official language in that country. It also contains the timezone of the capital, the TLD for that country and EU membership information. This information has been hand-picked and may therefore contain errors.

Secondly, it represents a country as an object and can be queried for the name, etc.

I18N_Currency
-------------

This is a very simple class for currency representation. It currently supports only three currencies: HUF, EUR and USD. This class also contains some style information how the currency normally formats money.

I18N_Language
-------------

This is a base class for all language representation. Again, this class has two purposes. It serves as an object representation, but also contains a lot of information like character maps for unknown characters, lexicographic ordering, etc. Please be sure to check the PHPDoc comments as features are too numerous to list here.

I18N_PhonePrefix
----------------

This class contains every country prefix in the world and again can be used as an object representation.

I18N_Timestamp
--------------

This is a very small utility class used to hold a timestamp in integer format.

