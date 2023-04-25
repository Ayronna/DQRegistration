<?php

enum Infraction 
{
    case MissedTrigger;
    case LookingAtExtraCards;
    case HiddenCardError;
    case MulliganProcedureError;
    case FailureToMaintainGameState;
    case Tardiness;
    case OutsideAssistance;
    case SlowPlay;
    case DecklistProblem;
    case DeckProblem;
    case LimitedProcedureViolation;
    case CommunicationPolicyViolation;
    case MarkedCards;
    case InsufficientShuffling;
    case UnsportingConductMinor;
    case UnsportingConductMajor;
    case ImproperlyDeterminingAWinner;
    case BriberyAndWagering;
    case AggressiveBehavior;
    case TheftOfTournamentMaterial;
    case Stalling;
    case Cheating;
}

?>