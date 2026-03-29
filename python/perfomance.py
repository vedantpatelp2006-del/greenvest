import sys

investment = float(sys.argv[1])

growth_rate = 0.08

profit = investment * growth_rate

print(round(profit,2))