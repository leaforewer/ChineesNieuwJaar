# ChineesNieuwJaar

Om Sass/scss te gebruiken heb je een sass compiler nodig. (Dat is gewoon css alleen je kan er wat handige dingen mee zoals variablen.)

Deze visual studio code extensie werkt goed: https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass
je kan ook iets anders gebruiken als dat beter werkt. Als je het heb gedownload en de instelling goed staan klik je gewoon op 
"Watch sass" rechtsonder in de blauwe balk




Zorg dat de instellingen goed staan en het dus het .css bestand in de css folder gooit. Je kan de instellingen zo veranderen:

In verkenner: C:\Users\%username%\AppData\Roaming\Code\User\settings.json > Paste
Of
In Visual studio code: Settings>Extensions>Live Sass compile configr> Settings:Formats > Edit in settings.json > Paste

```
{
    "liveSassCompile.settings.formats": [

        {
            "format": "expanded",
            "extensionName": ".css",
            "savePath": "./css"
        }
    ]
}
```
