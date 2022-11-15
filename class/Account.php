<?php

class Account
{
    private float $_balance;
    private array $_deposits = array();
    private array $_withdrawals = array();
    private array $_transactions = array();

    function __construct()
    {
        $this->_balance = 0;
    }
    
    /**
     * newTransaction Add new transaction to the transactions list
     *
     * @param  mixed $amount
     * @param  mixed $type The type of the transaction, must be 'deposit' or 'withdraw'
     * @return void
     */
    private function newTransaction(int|float $amount, string $type): void
    {   
        $transaction = [
            'type' => $type,
            'amount' => $amount
        ];
        array_push($this->_transactions, $transaction);
    }

    /**
     * deposit The balance is credited with the amount
     *
     * @param  mixed $amount The deposit amount
     * @return void
     */
    public function deposit(int|float $amount): void
    {
        array_push($this->_deposits, $amount);
        $this->newTransaction($amount, 'deposit');
        $this->_balance += $amount;
    }
    
    /**
     * withdraw The balance is debited with the amount
     *
     * @param  mixed $amount The withdraw amount
     * @return void
     */
    public function withdraw(int|float $amount): void
    {
        array_push($this->_withdrawals, $amount);
        $this->newTransaction($amount, 'withdraw');
        $this->_balance -= $amount;
    }
    
    /**
     * getBalance Get the value of the account
     *
     * @param  bool $isFormatted Default is true, false to get float value
     * @return mixed
     */
    public function getBalance(bool $isFormatted = true): mixed
    {
        if ($isFormatted) {
            return $this->currencyFormat($this->_balance);
        }
        return $this->_balance;

    }
    
        
    /**
     * getDepositsAverage
     *
     * @param  bool $isFormatted Default is true, false to get float value
     * @return mixed
     */
    public function getDepositsAverage(bool $isFormatted = true): mixed
    {
        $average = array_sum($this->_withdrawals) / count($this->_withdrawals);
        if ($isFormatted) {
            return $this->currencyFormat($average);
        }
        return array_sum($this->_deposits) / count($this->_deposits);
    }
    
        
    /**
     * getWithdrawalsAverage
     *
     * @param  bool $isFormatted Default is true, false to get float value
     * @return mixed
     */
    public function getWithdrawalsAverage(bool $isFormatted = true): mixed
    {
        $average = array_sum($this->_withdrawals) / count($this->_withdrawals);
        if ($isFormatted) {
            return $this->currencyFormat($average);
        }
        return $average;
    }
    
    /**
     * currencyFormat The result is formatted to display 2 decimal places 
     *                and space for thousands
     * @param  mixed $amount
     * @return string The formatted amount
     */
    public function currencyFormat($amount): string
    {
        return number_format($amount, 2, ',', ' ');
    }
}