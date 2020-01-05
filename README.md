# ExpressionEngine 2.x String to Uppercase Plugin


### This function runs mb_strtoupper() on a string of ExpressionEngine 2.x Template.
```
The tag pair is simply:
{exp:uppercase}istanbul{/exp:uppercase}

Example usage:
istanbul

becomes:
ISTANBUL
```


#### In order to use capital ( İ ) letters correctly in Turkish words, we need to send lang="tr" parameter to our club.
```
The tag pair is simply:
{exp:uppercase lang="tr"}istanbul{/exp:uppercase}

Example usage:
istanbul

becomes:
İSTANBUL
```



### Bu işlem ExpressionEngine 2.x şablonlarında mb_strtoupper() yönetimini çalıştırır.
```
Eklenti kullanımı:
{exp:uppercase}istanbul{/exp:uppercase}

Örnek Yazı:
istanbul

Sonuç:
ISTANBUL
```

#### Türkçe kelimelerde büyük ( İ ) harfini doğru şekilde kullanabilmemiz için lang="tr" parametresini ekletimize göndermemiz gerekiyor.
```
Eklenti kullanımı:
{exp:uppercase lang="tr"}istanbul{/exp:uppercase}

Örnek Yazı:
istanbul

Sonuç:
İSTANBUL
```

\#2020-01-06
