# Word Counter #
An exercise for PHP at Epicodus; 7-7-17

By Steve Spitz

### Description ###
This project aims to produce a webpage that can count instances of a certain word contained within a submitted block of text.

### Setup/Installation Requirements ###
* Copy URL from GitHub repository
* Open MAMP server
* Open terminal then:
  * $ git clone https://github.com/Gingerbolt/RepeatCounter.git
  * $ cd word-frequency/web
  * $ php -S localhost:8000
* Navigate to your preferred browser and navigate to URL localhost:8000

### Specifications ###
* The program accepts search terms (needle) and search location (haystack) from the user and displays them back
-input: Term: Surf Target: The sea lions frolic amongst the surf.
-output: Term: Surf Target: The sea lions frolic amongst the surf.
---(Term and target above chosen arbitrarily to show basic input/output format)

* The program can find lone single letter search terms of the same case
-input: Term: T Target: Hey bart, I'm mr T
-output: Term: T Target: Hey bart, I'm mr T MATCH COUNT = 1
---(Term and Target selected to show ability to identify only single character instances of the selected target)

* The program can identify and count occurrences of exact copies of the search word
-input: Term: Marcia Target: It is only Marcia
-output: Term: Marcia Target: It is only Marcia MATCH COUNT = 1
---(Term and target selected to show limitations of search function lifting over next few specs)

* The program ignores case when searching for target terms.
-input: Term: Marcia Target: It is only Marcia or marcia
-output: Term: Marcia Target: It is only Marcia or marcia MATCH COUNT = 2
---(Term and target selected to show limitations of search function lifting)

* The program ignores punctuation, symbols, and numbers when searching for matches.
-input: Term: Marcia Target: marcia Marcia Marcia! ...Marcia2, %marcia?
-output: Term: Marcia Target: marcia Marcia Marcia! ...Marcia2, %marcia? MATCH COUNT = 5
---(Term and target selected to show limitations of search function lifting)

### Technologies Used: ###
html, Bootstrap, CSS, PHP, Twig, Silex, GitHUb

### Legal ###
Copyright &copy; 2017 Steve Spitz

This application is licensed under the MIT License
