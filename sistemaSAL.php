<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
def calcular_salario():
nome = input("Digite o nome do(a) vendedor(a): ")
meta_semanal = float(input("Digite o valor da meta semanal: "))
meta_mensal = float(input("Digite o valor da meta mensal: "))

salario_minimo = 1100.00  # Exemplo de salário mínimo
valor_sobre_meta_semanal = meta_semanal * 0.01
valor_excedente_semanal = 0
valor_excedente_mensal = 0

# Se ultrapassar a meta semanal
if meta_semanal > 20000:
    valor_excedente_semanal = (meta_semanal - 20000) * 0.05

# Se ultrapassar a meta mensal
if meta_mensal > 80000:
    valor_excedente_mensal = (meta_mensal - 80000) * 0.10

# Salário final
salario_final = salario_minimo + valor_sobre_meta_semanal + valor_excedente_semanal + valor_excedente_mensal

print("\nSalário final de {}: R${:.2f}".format(nome, salario_final))

# Executar o cálculo
calcular_salario()
    ?>
</body>
</html>