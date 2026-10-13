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

    public function __toString(): string
    {
        return $this->describe();
    }
	public function get_first(): mixed
	{
		return $this->first;
	}

	
	public function set_first(mixed $first): void
	{
		$this->first = $first;
	}
public function get_last(): mixed
    {
        return $this->last;
    }   
	public function get_second(): mixed
	{
		return $this->second;
	}
    public function set_last(mixed $last): void
    {
        $this->last = $last;
    }
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
