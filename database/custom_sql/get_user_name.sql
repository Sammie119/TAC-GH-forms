CREATE OR REPLACE FUNCTION public.get_user_name(
	p_user_id bigint)
    RETURNS character varying
    LANGUAGE 'sql'
    COST 100
    VOLATILE PARALLEL UNSAFE
AS $BODY$
SELECT
	TRIM( name ) AS user_name
FROM
	public.users
WHERE
	user_id = p_user_id;
$BODY$;

ALTER FUNCTION public.get_user_name(bigint)
    OWNER TO postgres;