<?php

/**
 * LeagueTeam
 *
 * @property integer        $id
 * @property integer        $league_id
 * @property string         $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\LeagueTeam whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\LeagueTeam whereLeagueId($value)
 * @method static \Illuminate\Database\Query\Builder|\LeagueTeam whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\LeagueTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\LeagueTeam whereUpdatedAt($value)
 * @property-read \League   $league
 */
class LeagueTeam extends Eloquent {

	protected $fillable = ['name'];

	/**
	 * The league this team is in
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function league() {
		return $this->belongsTo('League');
	}

}