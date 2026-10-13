<?php
#ORAZIO CASTELLANO
#13/10/2026
#09:01
declare(strict_types=1);

class Theme_Wrapper_Theme {
	public mixed $first;

    private mixed $last;
	private mixed $second;

public function __construct(mixed $first, mixed $last, mixed $second)
    {
        $this->first = $first;
        $this->last = $last;
        $this->second = $second;
    }
    
	public function __construct_Second(mixed $first, mixed $second)
	{
		$this->first = $first;
		$this->second = $second;
	}

	/** @return TFirst */
	public function get_first(): mixed
	{
		return $this->first;
	}

	/** @param TFirst $first */
	public function set_first(mixed $first): void
	{
		$this->first = $first;
	}

	/** @return TSecond */
	public function get_second(): mixed
	{
		return $this->second;
	}

	/** @param TSecond $second */
	public function set_second(mixed $second): void
	{
		$this->second = $second;
	}

	public function describe(): string
	{
		return $this->stringify($this->first) . ' | ' . $this->stringify($this->second);
	}

	private function stringify(mixed $value): string
	{
		return is_scalar($value) || $value === null
			? (string) $value
			: get_debug_type($value);
	}
}
