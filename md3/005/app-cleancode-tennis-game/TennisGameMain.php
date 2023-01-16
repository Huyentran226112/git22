<?php
const KHONG = 'Love-All';
const MOT = 'Fifteen-All';
const HAI = 'Thirty-All';
const BA = 'Forty-All';

include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore('player1', 'player2', 6, 8);

echo $tennisGame;