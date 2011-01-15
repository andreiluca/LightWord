This folder contains the source files for the translations provided with
LightWord. The lightword.pot file included here should be used for
generating your translations.

There are a few comments in the file with special-case instructions.

I (Voyagerfan5761) noticed that Poedit would always escape double quotes
when I regenerated the POT file, but escaping wasn't necessary for the
way the code was written (usually). In fact, escaping in the source made
the escaping show up on the site--obviously not a good thing. I changed
a few things to allow for the escaped quotes. If you're testing your
translation, it'd be great if you could report any quote-related
problems using the issue tracker on GitHub:

https://github.com/andreiluca/LightWord/issues

Thanks!
