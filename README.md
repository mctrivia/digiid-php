Digi-ID implementation in PHP
===========================

PHP implementation of [Digi-ID](https://digiid.io).

**Digi-ID Open Authentication Protocol**

Pure DigiByte sites and applications shouldn’t have to rely on artificial identification methods such as usernames and passwords. Digi-ID is an open authentication protocol allowing simple and secure authentication using public-key cryptography.

Classical password authentication is an insecure process that could be solved with public key cryptography. The problem however is that it theoretically offloads a lot of complexity and responsibility on the user. Managing private keys securely is complex. However this complexity is already addressed in the DigiByte ecosystem. So doing public key authentication is practically a free lunch to DigiByte users.

**The protocol is based on the following BIP draft:**

https://github.com/bitid/bitid/blob/master/BIP_draft.md

Demo
====

https://orlib.org/digiid/ (Has a custom interface on top)


Installation
============
* Create a MySQL database, import struct.sql into it.
* Configure database information and server url in config.php
* Download from https://github.com/phpecc/phpecc/tree/366c0d1d00cdf95b0511d34797c116d9be48410e into phpecc directory

Notes
=====
* Pure PHP implementation, no need to run a DigiByte node

* GMP PHP extension is required (most shared hosting providers don't have this, another reason to implement digibyted support)

* **isMessageSignatureValidSafe** is the same function as **isMessageSignatureValid** but the later with throw different exceptions on fail, while the former only return true/false (only for lazy programmers that don't handle exceptions)

* By default, it will only allow 1 user by IP to **try** login at the same time (once a user is logged, another user could start the login process), this example could be modify to allow several (no need to modify Digi-ID)
