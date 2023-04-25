import Component from '@glimmer/component';

export default class DiscFormComponent extends Component {
  _format;
  _round;
  _table;
  _playerName;
  _infraction;
  _penalty;
  _description;
  _judge;

  _allInfractions = [
    { error: 'Game Play Error - Failure to maintain game state' },
    { error: 'Game Play Error - Game Rule Violation' },
    { error: 'Game Play Error - Communication Policy Violation' },
    { error: 'Tournament Error - Deck Problem' },
    { error: 'Tournament Error - Tournament Error - Minor' },
    { error: 'Tournament Error - Tournament Error - Major' },
    { error: 'Tournament Error - Outside Assistance' },
    { error: 'Tournament Error - Unsporting Conduct' },
    { error: 'Tournament Error - Bribery' },
    { error: 'Tournament Error - Stalling' },
    { error: 'Tournament Error - Tardiness' },
    { error: 'Tournament Error - Insufficient Shuffling' },
    { error: 'Tournament Error - Decklist Problem' },
    { error: 'Tournament Error - Drawing Extra Cards' },
    { error: 'Tournament Error - Failure to Determine a Winner' },
    { error: 'Tournament Error - Improperly Determining a Winner' },
    { error: 'Tournament Error - Fraud' },
    { error: 'Tournament Error - Marked Cards' },
    { error: 'Tournament Error - Hidden Information Violation' },
    { error: 'Tournament Error - Improperly Timed Effect' },
    { error: 'Tournament Error - Inappropriate Outside Assistance' },
    { error: 'Tournament Error - Looking at Extra Cards' },
    { error: 'Tournament Error - Offering or Accepting a Draw Outside of a Game Loss Situation'},
  ];

  _allPenalties = [
    {penalty: 'Comment'},
    {penalty: 'Warning'},
    {penalty: 'Game Loss'},
    {penalty: 'Match Loss'},
    {penalty: 'Disqualification'}
  ]
}
