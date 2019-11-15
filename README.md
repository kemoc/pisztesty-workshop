# Zadanie 01

```
$: git clone https://github.com/devenvpl/pisztesty-workshop
$: php composer.phar install
$: php composer.phar run-script tests
$: php composer.phar run-script testsdox
```

# Zadanie 02 - Podstawowe asercje

Stwórz testy w jednym przypadku testowym które zweryfikują:
- ilość elementów w tablicy
- występowanie danego klucza w tablicy
- klasę instancji obiektu
- czy słowo "Fortepian" znajduje się w ciągu znaków "Lorem Ipsum Dolor"
- czy liczba 128 jest większa od 512

# Zadanie 03 - FizzBuzz

Popularna kata FizzBuzz

- Wypisz wszystkie liczby od 1 do 100
- Jeśli liczba jest podzielna przez trzy wypisz "Fizz"
- Jeśli liczba jest podzielna przez pięć wypisz "Buzz"
- Jeśli liczba jest podzielna przez trzy i pięć wypisz "FizzBuzz"

# Zadanie 04 - FizzBuz nazewnictwo

Zastosuj jeden z zaprezentowanych wzorców w swoich poprzednich testach dla implementacji FizzBuzz

# Zadanie 05 - Kalkulacja zniżki

Przygotuj implementację oraz testy. W systemie istnieje możliwość kalkulowania zniżki zgodnie z założeniami. Zniżka przysługuje ze względu na dwa parametry "wiek" oraz "pracownik rządowy" w sposób który następuje:

- poniżej 18 roku => 100%
- od 18 do 26 roku życia włącznie => 25%
- powyżej 26 do 64 roku życia => 0%
- od 64 => 50%
- pełnoletni pracownik rządowy => 100%

# Zadanie 06 - DataProviders dla kalkulacji zniżki

Zamiast sztywnych danych w posiadanych testach, przygotuj zestaw danych dostarczanych za pomocą osobnych DataProvider.

# Zadanie 07 - Exception dla kalkulacji zniżki

Dla wieku niejszego niż zero rzuć wyjątkiem AgeCantBeZeroException oraz napisz do tego odpowiedni test.

Dla wieku powyżej 115 lat rzuć wyjątkiem YouCantBeOlderThan115YearsException oraz napisz odpowiedni test.

# Zadanie 08 - Testy UserService

Przygotuj test dla metody getUserById

Stwórz stuba dla UserRepository tak aby uniknąć pobierania danych z bazy

# Zadanie 09 - Rezerwacja reklam multimedialnych
System rezerwacji reklam multimedialnych.

- Każda reklama zawiera treść prezentowanej reklamy
- Reklamodawca może kupić wyświetlanie reklamy w określonym czasie, w określonej lokalizacji
- Reklamodawca nie może zakupić dwukrotnie reklamy w tym samym czasie i w tej samej lokalizacji
- Reklamodawca ma możliwość przejrzenia swoich aktywnych reklam
  - Reklama aktywna to taka która wyświetlana jest w aktualnym momencie
- Reklamodawca ma możliwość przejrzenia swoich zaplanowanych reklam
  - Reklama zaplanowana to taka która dopiero będzie wyświetlana w przyszłości
- Reklamodawca ma możliwość przejrzenia swoich archiwalnych reklam
  - Reklama archiwalna to taka której czas wyświetlania minął
- Wyświetlanie reklamy jest płatne, a cena określona jest w polskich złotówkach (bez groszy)
- Kwota za wyświetlanie reklamy jest naliczana za dzień wyświetlania reklamy
- Cena za dzień wyświetlania reklamy jest różna w różnych lokalizacjach
- Lokalizacja jest określona przez nazwę miasta oraz ulicy

Zalecane jest aby każdy z powyższych podpunktów był interpretowany jako minimum jeden cykl Red-Green-Refactor.

# Wybrane sposoby nazywania przypadków testowych

MethodName_StateUnderTest_ExpectedBehavior
- isAdult_AgeLessThan18_False
- withdrawMoney_InvalidAccount_ExceptionThrown
- admitStudent_MissingMandatoryFields_FailToAdmit
   
MethodName_ExpectedBehavior_StateUnderTest
- isAdult_False_AgeLessThan18
- withdrawMoney_ThrowsException_IfAccountIsInvalid
- admitStudent_FailToAdmit_IfMandatoryFieldsAreMissing
   
MethodName_Given[xx]_When[xx]_Then[xxx]
- sumOfTwoNumbers_givenTwoPositiveNumbers_WhenNumbersArePositive_ThenResultIsPositive()
- test[Feature being tested]
- testIsNotAnAdultIfAgeLessThan18
- testFailToWithdrawMoneyIfAccountIsInvalid
- testStudentIsNotAdmittedIfMandatoryFieldsAreMissing
   
Feature to be tested
- IsNotAnAdultIfAgeLessThan18
- FailToWithdrawMoneyIfAccountIsInvalid
- StudentIsNotAdmittedIfMandatoryFieldsAreMissing
   
Should_ExpectedBehavior_When_StateUnderTest
- Should_ThrowException_When_AgeLessThan18
- Should_FailToWithdrawMoney_ForInvalidAccount
- Should_FailToAdmit_IfMandatoryFieldsAreMissing
   
When_StateUnderTest_Expect_ExpectedBehavior
- When_AgeLessThan18_Expect_isAdultAsFalse
- When_InvalidAccount_Expect_WithdrawMoneyToFail
- When_MandatoryFieldsAreMissing_Expect_StudentAdmissionToFail
   
Given_Preconditions_When_StateUnderTest_Then_ExpectedBehavior
- Given_UserIsAuthenticated_When_InvalidAccountNumberIsUsedToWithdrawMoney_Then_TransactionsWillFail
