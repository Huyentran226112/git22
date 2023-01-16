<?php

class TennisGame
{
    public string $score = '';

    public function getScore($first_player, $second_player, $first_player_score, $second_player_score)
    {
        $tempScore = 0;

        if ($first_player_score == $second_player_score) {
            switch ($first_player_score) {
                case KHONG:
                    $this->score = "Love-All";
                    break;
                case MOT:
                    $this->score = "Fifteen-All";
                    break;
                case HAI:
                    $this->score = "Thirty-All";
                    break;
                case BA:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        } else if ($first_player_score >= 4 || $second_player_score >= 4) {
            $minusResult = $first_player_score - $second_player_score;
            $this->msg($minusResult);
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) $tempScore = $first_player_score;
                else {
                    $this->score .= "-";
                    $tempScore = $second_player_score;
                }
                switch ($tempScore) {
                    case KHONG:
                        $this->score .= "Love";
                        break;
                    case MOT:
                        $this->score .= "Fifteen";
                        break;
                    case HAI:
                        $this->score .= "Thirty";
                        break;
                    case BA:
                        $this->score .= "Forty";
                        break;
                }
            }
        }
    }

    public function __toString(): string
    {
        return $this->score;
    }

    public function msg($minusResult){
        if ($minusResult == 1) $this->score = "Advantage first_player";
        else if ($minusResult == -1) $this->score = "Advantage second_player";
        else if ($minusResult >= 2) $this->score = "Win for first_player";
        else $this->score = "Win for second_player";
    }
}