<?php
#ORAZIO CASTELLANO
#13/10/2026
#09:01
declare(strict_types=1);

/**
 * @template TFirst
 * @template TSecond
 */
class GenericPair
{
	/** @var TFirst */
	private mixed $first;

	/** @var TSecond */
	private mixed $second;

	/**
	 * @param TFirst $first
	 * @param TSecond $second
	 */
	public function __construct(mixed $first, mixed $second)
	{
		$this->first = $first;
		$this->second = $second;
	}

	/** @return TFirst */
	public function getFirst(): mixed
	{
		return $this->first;
	}

	/** @param TFirst $first */
	public function setFirst(mixed $first): void
	{
		$this->first = $first;
	}

	/** @return TSecond */
	public function getSecond(): mixed
	{
		return $this->second;
	}

	/** @param TSecond $second */
	public function setSecond(mixed $second): void
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
