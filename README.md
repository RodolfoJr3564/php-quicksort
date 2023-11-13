# Desafio 2 quicksort

Este desafio implementa o algoritmo de ordenação Quicksort em PHP. A função recebe um array de números desordenados e retorna o array ordenado.

## Como Executar

```shell
php quicksort.php
```

### Output

```shell
Teste quicksort com [3, 5, 4, 2, 2, 1]... passou!
Teste quicksort com [7, 3, 1]... passou!
Teste quicksort com array vazio... passou!
Teste quicksort com [1]... passou!
Parece que está tudo funcionando!%
```

## Implementação

A função `quicksort` divide o array em partes menores, comparando cada elemento com um pivô e separando-os em sub-arrays menores e maiores. Estes sub-arrays são então ordenados recursivamente.

## Testes

Vários testes foram implementados para garantir a correta funcionalidade do algoritmo, incluindo casos com arrays vazios, arrays com um único elemento e arrays com elementos repetidos.
