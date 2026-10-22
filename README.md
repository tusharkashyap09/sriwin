# sriwin

PHP application source and static assets.

## Configuration

Set these environment variables in the PHP runtime before serving the application:

- `SRIWIN_DB_HOST` (optional; defaults to `localhost`)
- `SRIWIN_DB_USERNAME`
- `SRIWIN_DB_PASSWORD`
- `SRIWIN_DB_NAME`
- `SRIWIN_ENCRYPTION_KEY` and `SRIWIN_ENCRYPTION_IV` for encrypted IDs
- `SRIWIN_JWT_SECRET` for JWT generation

`.env.example` lists the supported names. It is a reference, not an automatically
loaded environment file. Do not commit production secrets. Existing encrypted
values and JWTs depend on the original private keys; configure the same values
securely or rotate them and account for invalidating existing tokens/data.
