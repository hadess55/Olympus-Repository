<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Hargakonsumen extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'hargakonsumen';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'nama','gkp_petani','gkg_penggilingan','beras_premium','beras_medium','jagung_pipilan_kering','cabe_besar','cabe_rawit_merah','cabe_keriting','bawang_merah','daging_ayam','daging_sapi','telur_ayam_ras','id_kecamatan','pisang','jeruk','tanggal','ubi_kayu','ubi_jalar','kedelai_lokal_kering'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id LIKE ? 
		)';
		$search_params = [
			"%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"gkp_petani",
			"gkg_penggilingan",
			"beras_premium",
			"beras_medium",
			"jagung_pipilan_kering",
			"cabe_besar",
			"cabe_rawit_merah",
			"cabe_keriting",
			"bawang_merah",
			"daging_ayam",
			"daging_sapi",
			"telur_ayam_ras",
			"id_kecamatan",
			"date_created",
			"date_updated",
			"pisang",
			"jeruk",
			"tanggal",
			"ubi_kayu",
			"ubi_jalar",
			"kedelai_lokal_kering" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"gkp_petani",
			"gkg_penggilingan",
			"beras_premium",
			"beras_medium",
			"jagung_pipilan_kering",
			"cabe_besar",
			"cabe_rawit_merah",
			"cabe_keriting",
			"bawang_merah",
			"daging_ayam",
			"daging_sapi",
			"telur_ayam_ras",
			"id_kecamatan",
			"date_created",
			"date_updated",
			"pisang",
			"jeruk",
			"tanggal",
			"ubi_kayu",
			"ubi_jalar",
			"kedelai_lokal_kering" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"gkp_petani",
			"gkg_penggilingan",
			"beras_premium",
			"beras_medium",
			"jagung_pipilan_kering",
			"cabe_besar",
			"cabe_rawit_merah",
			"cabe_keriting",
			"bawang_merah",
			"daging_ayam",
			"daging_sapi",
			"telur_ayam_ras",
			"id_kecamatan",
			"date_created",
			"date_updated",
			"pisang",
			"jeruk",
			"tanggal",
			"ubi_kayu",
			"ubi_jalar",
			"kedelai_lokal_kering" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"gkp_petani",
			"gkg_penggilingan",
			"beras_premium",
			"beras_medium",
			"jagung_pipilan_kering",
			"cabe_besar",
			"cabe_rawit_merah",
			"cabe_keriting",
			"bawang_merah",
			"daging_ayam",
			"daging_sapi",
			"telur_ayam_ras",
			"id_kecamatan",
			"date_created",
			"date_updated",
			"pisang",
			"jeruk",
			"tanggal",
			"ubi_kayu",
			"ubi_jalar",
			"kedelai_lokal_kering" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"gkp_petani",
			"gkg_penggilingan",
			"beras_premium",
			"beras_medium",
			"jagung_pipilan_kering",
			"cabe_besar",
			"cabe_rawit_merah",
			"cabe_keriting",
			"bawang_merah",
			"daging_ayam",
			"daging_sapi",
			"telur_ayam_ras",
			"id_kecamatan",
			"pisang",
			"jeruk",
			"tanggal",
			"ubi_kayu",
			"ubi_jalar",
			"kedelai_lokal_kering",
			"id" 
		];
	}
	public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
