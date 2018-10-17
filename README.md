OpenAntumID/DigiID implementation in PHP
===========================

PHP implementation of [DigiID project/draft](https://github.com/bitid/bitid).

Based on the work of [scintill/php-bitcoin-signature-routines](https://github.com/scintill/php-bitcoin-signature-routines) and using [PHPECC classes](https://github.com/mdanter/phpecc)

Licensed under the Apache License, Version 2.0 (unless it's not compatible with the license of works used)

**OpenAntumID/DigiByte Authentication Open Protocol**

Pure DigiByte sites and applications shouldn’t have to rely on artificial identification methods such as usernames and passwords. DigiID is an open protocol allowing simple and secure authentication using public-key cryptography.

Classical password authentication is an insecure process that could be solved with public key cryptography. The problem however is that it theoretically offloads a lot of complexity and responsibility on the user. Managing private keys securely is complex. However this complexity is already being addressed in the Bitcoin ecosystem. So doing public key authentication is practically a free lunch to digibyters.

**The protocol is described on the following BIP draft and is open for discussion :**

https://github.com/bitid/bitid/blob/master/BIP_draft.md

Demo AntumID Starting page
==========================
https://www.go4ict.be

Demo Open AntumID
========================
To use this demo you do not have to pre-register your AntumID. 
https://www.go4ict.be/digibyte/


Demo Full AntumID - Using univeral SOAP protocol
=================================================
To use this full demo you must create an AntumID first, via www.antumid.be. When creating an AntumID you choose AntumID Lite or AntumID eID. AntumID is a full mobile identity, the authentication process is completely separate from the identification exchange. The end user has total control over privacy. AntumID SOAP is universal an can be used in all program languages. More info about AntumID SOAP contact us: support@antumid.be 
https://www.go4ict.be/DigiAntumID/



Installation
============
* Create a MySQL database, import struct.sql into it.
* Configure database information and server url in config.php


Notes
=====
* I tried to create a flexible library, some  work needs to be done to adapt it to your project

* Pure PHP implementation, no need of **digibyted** (maybe add support for digibyted in the future)

* GMP PHP extension is required (most shared hostings don't have it, another reason to implement digibyted support)

* **isMessageSignatureValidSafe** is the same function as **isMessageSignatureValid** but the later with throw different exceptions on fail, while the former only return true/false (only for lazy programmers that don't handle exceptions)

* By default, it will only allow 1 user by IP to **try** login at the same time (once a user is logged, another user could start the login process), this example could be modify to allow several (no need to modify DigiID)



License
=======
The MIT License (MIT)

Copyright (c) 2016 Daniel Esteban

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


