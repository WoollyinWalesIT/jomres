
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


/
*
 

a
d
m
i
n
 
t
r
i
g
g
e
r
 
p
o
i
n
t
s

$
a
r
r
 
[
 
'
r
e
s
o
u
r
c
e
_
t
y
p
e
_
g
a
t
h
e
r
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
1
1
0
1
0
'
;

$
a
r
r
 
[
 
'
r
e
s
o
u
r
c
e
_
i
d
_
g
a
t
h
e
r
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
1
1
0
2
0
'
;

$
a
r
r
 
[
 
'
p
o
s
t
_
u
p
l
o
a
d
_
p
r
o
c
e
s
s
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
1
1
0
3
0
'
;

$
a
r
r
 
[
 
'
g
e
t
_
e
x
i
s
t
i
n
g
_
i
m
a
g
e
s
_
t
r
i
g
g
e
r
'
]
 
=
 
'
1
1
0
4
0
'
;

$
a
r
r
 
[
 
'
p
o
s
t
_
d
e
l
e
t
e
_
p
r
o
c
e
s
s
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
1
1
0
5
0
'
;

$
a
r
r
 
[
 
'
a
l
l
o
w
e
d
_
f
i
l
e
_
t
y
p
e
s
'
]
 
=
 
'
(
j
p
e
?
g
|
p
n
g
)
'
;
	

f
r
o
n
t
e
n
d
 
t
r
i
g
g
e
r
 
p
o
i
n
t
s

$
a
r
r
 
[
 
'
r
e
s
o
u
r
c
e
_
t
y
p
e
_
g
a
t
h
e
r
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
0
3
3
7
9
'
;

$
a
r
r
 
[
 
'
r
e
s
o
u
r
c
e
_
i
d
_
g
a
t
h
e
r
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
0
3
3
8
1
'
;

$
a
r
r
 
[
 
'
p
o
s
t
_
u
p
l
o
a
d
_
p
r
o
c
e
s
s
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
0
3
3
8
2
'
;

$
a
r
r
 
[
 
'
g
e
t
_
e
x
i
s
t
i
n
g
_
i
m
a
g
e
s
_
t
r
i
g
g
e
r
'
]
 
=
 
'
0
3
3
8
3
'
;

$
a
r
r
 
[
 
'
p
o
s
t
_
d
e
l
e
t
e
_
p
r
o
c
e
s
s
i
n
g
_
t
r
i
g
g
e
r
'
]
 
=
 
'
0
3
3
8
4
'
;

$
a
r
r
 
[
 
'
a
l
l
o
w
e
d
_
f
i
l
e
_
t
y
p
e
s
'
]
 
=
 
'
(
j
p
e
?
g
|
p
n
g
)
'
;
 

*
/


c
l
a
s
s
 
j
0
6
0
0
0
m
e
d
i
a
_
c
e
n
t
r
e
_
h
a
n
d
l
e
r

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	

	
	
/
/
r
e
s
o
u
r
c
e
_
t
y
p
e
_
g
a
t
h
e
r
i
n
g
_
t
r
i
g
g
e
r

	
	
i
f
 
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
	
$
r
e
s
u
l
t
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
1
1
0
1
0
'
)
;

	
	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
 
'
1
1
0
1
0
'
 
]
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
e
s
u
l
t
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
3
7
9
'
)
;

	
	
	
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
 
'
0
3
3
7
9
'
 
]
;

	
	
}


	
	
/
/
n
o
 
r
e
s
o
u
r
c
e
 
t
y
p
e
s
.
.
e
x
i
t

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
)
)
 
{
 
/
/
 
D
o
 
n
o
w
t
.

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
r
e
s
o
u
r
c
e
_
t
y
p
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
o
u
r
c
e
_
i
d
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
r
e
s
o
u
r
c
e
_
i
d
'
,
 
'
0
'
)
;


	
	
/
/
i
f
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
i
s
 
e
m
p
t
y
,
 
r
e
t
u
r
n

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
 
=
=
 
'
'
)

	
	
	
r
e
t
u
r
n
;

	
	

	
	
/
/
i
f
 
r
e
s
o
u
r
c
e
 
i
d
 
i
s
 
b
l
a
n
k
,
 
m
a
k
e
 
i
t
 
0

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
i
d
 
=
=
 
'
'
)

	
	
	
$
r
e
s
o
u
r
c
e
_
i
d
 
=
 
'
0
'
;


	
	
/
/
 
A
 
s
e
c
u
r
i
t
y
 
c
h
e
c
k
 
t
o
 
e
n
s
u
r
e
 
t
h
a
t
 
t
h
e
 
u
s
e
r
'
s
 
n
o
t
 
t
r
y
i
n
g
 
t
o
 
p
a
s
s
 
a
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
t
h
a
t
 
w
e
 
c
a
n
'
t
 
h
a
n
d
l
e

 
 
 
 
 
 
 
 
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
)
)
 
{
 
/
/
 
T
h
e
 
r
e
s
o
u
r
c
e
 
t
y
p
e
 
i
s
n
'
t
 
r
e
c
o
g
n
i
s
e
d
,
 
l
e
t
'
s
 
g
e
t
 
t
h
e
 
h
e
l
l
 
o
u
t
t
a
 
D
o
d
g
e
.

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
s
e
t
 
p
r
o
p
e
r
t
y
 
u
i
d

	
	
i
f
 
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
	
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

	
	
}

	
	

	
	
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
[
$
r
e
s
o
u
r
c
e
_
t
y
p
e
]
 
[
 
'
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
'
 
]
;

	
	

	
	
/
/
s
e
t
 
i
m
a
g
e
 
u
p
l
o
a
d
 
p
a
t
h
s

	
	
i
f
 
(
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
 
{

	
	
	
$
a
b
s
_
p
a
t
h
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
[
$
r
e
s
o
u
r
c
e
_
t
y
p
e
]
 
[
'
u
p
l
o
a
d
_
r
o
o
t
_
a
b
s
_
p
a
t
h
'
]
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
J
R
D
S
.
$
r
e
s
o
u
r
c
e
_
i
d
.
J
R
D
S
;

	
	
	
$
r
e
l
_
p
a
t
h
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
[
$
r
e
s
o
u
r
c
e
_
t
y
p
e
]
 
[
'
u
p
l
o
a
d
_
r
o
o
t
_
r
e
l
_
p
a
t
h
'
]
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
/
'
.
$
r
e
s
o
u
r
c
e
_
i
d
.
'
/
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
a
b
s
_
p
a
t
h
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
[
$
r
e
s
o
u
r
c
e
_
t
y
p
e
]
 
[
'
u
p
l
o
a
d
_
r
o
o
t
_
a
b
s
_
p
a
t
h
'
]
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
J
R
D
S
;

	
	
	
$
r
e
l
_
p
a
t
h
 
=
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
s
 
[
$
r
e
s
o
u
r
c
e
_
t
y
p
e
]
 
[
'
u
p
l
o
a
d
_
r
o
o
t
_
r
e
l
_
p
a
t
h
'
]
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
/
'
;

	
	
}

	
	

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
_
G
E
T
[
'
d
e
l
e
t
e
'
]
)
 
&
&
 
$
_
G
E
T
[
'
d
e
l
e
t
e
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
_
n
a
m
e
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
f
i
l
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
_
n
a
m
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
/
/
d
e
l
e
t
e
 
i
m
a
g
e
 
f
r
o
m
 
d
i
s
k
 
a
n
d
 
d
b

	
	
	
i
f
 
(
!
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
d
e
l
e
t
e
_
i
m
a
g
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
,
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,
 
$
r
e
s
o
u
r
c
e
_
i
d
,
 
$
f
i
l
e
_
n
a
m
e
,
 
$
a
b
s
_
p
a
t
h
,
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
)
)
 
{

	
	
	
	
$
r
e
s
p
o
n
s
e
 
=
 
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
 
=
>
 
"
B
o
o
,
 
w
e
 
c
o
u
l
d
n
'
t
 
d
e
l
e
t
e
 
i
t
.
 
I
'
m
 
g
o
i
n
g
 
t
o
 
h
a
v
e
 
a
 
l
i
t
t
l
e
 
c
r
y
 
i
n
 
t
h
e
 
c
o
r
n
e
r
 
n
o
w
.
"
,
 
'
s
u
c
c
e
s
s
'
 
=
>
 
'
0
'
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
r
e
s
p
o
n
s
e
 
=
 
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
 
=
>
 
"
Y
a
y
,
 
w
e
'
l
l
 
d
e
l
e
t
e
d
 
t
h
i
s
 
s
u
k
k
a
"
,
 
'
s
u
c
c
e
s
s
'
 
=
>
 
'
1
'
)
;

	
	
	
}

	
	
	

	
	
	
/
/
p
o
s
t
_
d
e
l
e
t
e
_
p
r
o
c
e
s
s
i
n
g
_
t
r
i
g
g
e
r
,
 
o
p
t
i
o
n
a
l
 
f
o
r
 
p
o
s
t
 
d
e
l
e
t
i
o
n

	
	
	
i
f
 
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
1
1
0
5
0
'
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
3
8
4
'
)
;

	
	
	
}

	
	
	

	
	
	
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
$
r
e
s
p
o
n
s
e
)
;

	
	
	
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
_
F
I
L
E
S
)
)
 
{

	
	
	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
u
p
l
o
a
d
e
r
'
)
;


	
	
	
	
i
f
 
(
!
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
	
	
	
$
s
c
r
i
p
t
_
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
m
e
d
i
a
_
c
e
n
t
r
e
_
h
a
n
d
l
e
r
&
d
e
l
e
t
e
=
1
&
r
e
s
o
u
r
c
e
_
t
y
p
e
=
'
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
&
r
e
s
o
u
r
c
e
_
i
d
=
'
.
$
r
e
s
o
u
r
c
e
_
i
d
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
s
c
r
i
p
t
_
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
_
A
J
A
X
.
'
&
t
a
s
k
=
m
e
d
i
a
_
c
e
n
t
r
e
_
h
a
n
d
l
e
r
&
d
e
l
e
t
e
=
1
&
r
e
s
o
u
r
c
e
_
t
y
p
e
=
'
.
$
r
e
s
o
u
r
c
e
_
t
y
p
e
.
'
&
r
e
s
o
u
r
c
e
_
i
d
=
'
.
$
r
e
s
o
u
r
c
e
_
i
d
;

	
	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
p
l
o
a
d
_
h
a
n
d
l
e
r
 
=
 
n
e
w
 
U
p
l
o
a
d
H
a
n
d
l
e
r
(
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
c
l
a
s
s
 
p
a
r
a
m
s

	
	
	
	
	
'
a
c
c
e
p
t
_
f
i
l
e
_
t
y
p
e
s
'
 
=
>
 
'
/
\
.
(
j
p
e
?
g
|
p
n
g
)
$
/
i
'
,

	
	
	
	
	
'
s
c
r
i
p
t
_
u
r
l
'
 
=
>
 
$
s
c
r
i
p
t
_
u
r
l
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
u
p
l
o
a
d
_
d
i
r
'
 
=
>
 
$
a
b
s
_
p
a
t
h
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
u
p
l
o
a
d
_
u
r
l
'
 
=
>
 
$
r
e
l
_
p
a
t
h
,

	
	
	
	
	
'
i
m
a
g
e
_
v
e
r
s
i
o
n
s
'
 
=
>
 
a
r
r
a
y
(

	
	
	
	
	
	
/
/
 
T
h
e
 
e
m
p
t
y
 
i
m
a
g
e
 
v
e
r
s
i
o
n
 
k
e
y
 
d
e
f
i
n
e
s
 
o
p
t
i
o
n
s
 
f
o
r
 
t
h
e
 
o
r
i
g
i
n
a
l
/
l
a
r
g
e
 
i
m
a
g
e
:

	
	
	
	
	
	
'
'
 
=
>
 
a
r
r
a
y
(

	
	
	
	
	
	
	
'
m
a
x
_
w
i
d
t
h
'
 
=
>
 
(
i
n
t
)
$
j
r
C
o
n
f
i
g
[
 
'
m
a
x
w
i
d
t
h
'
 
]
,

	
	
	
	
	
	
	
'
m
a
x
_
h
e
i
g
h
t
'
 
=
>
 
(
i
n
t
)
$
j
r
C
o
n
f
i
g
[
 
'
m
a
x
w
i
d
t
h
'
 
]

	
	
	
	
	
	
)
,

	
	
	
	
	
	
'
m
e
d
i
u
m
'
 
=
>
 
a
r
r
a
y
(

	
	
	
	
	
	
	
'
m
a
x
_
w
i
d
t
h
'
 
=
>
 
(
i
n
t
)
$
j
r
C
o
n
f
i
g
[
 
'
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
w
i
d
t
h
'
 
]
,

	
	
	
	
	
	
	
'
m
a
x
_
h
e
i
g
h
t
'
 
=
>
 
(
i
n
t
)
$
j
r
C
o
n
f
i
g
[
 
'
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
h
e
i
g
h
t
'
 
]

	
	
	
	
	
	
)
,

	
	
	
	
	
	
'
t
h
u
m
b
n
a
i
l
'
 
=
>
 
a
r
r
a
y
(

	
	
	
	
	
	
	
'
m
a
x
_
w
i
d
t
h
'
 
=
>
 
(
i
n
t
)
$
j
r
C
o
n
f
i
g
[
 
'
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
m
a
x
_
w
i
d
t
h
'
 
]
,

	
	
	
	
	
	
	
'
m
a
x
_
h
e
i
g
h
t
'
 
=
>
 
(
i
n
t
)
$
j
r
C
o
n
f
i
g
[
 
'
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
m
a
x
_
h
e
i
g
h
t
'
 
]

	
	
	
	
	
	
)

	
	
	
	
	
)
,

	
	
	
	
	
/
/
j
o
m
r
e
s
 
s
p
e
c
i
f
i
c
 
p
a
r
a
m
s
,
 
r
e
q
u
i
r
e
d
 
f
o
r
 
p
o
s
t
 
u
p
l
o
a
d
 
p
r
o
c
e
s
s
i
n
g

	
	
	
	
	
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
p
r
o
p
e
r
t
y
_
u
i
d
,

	
	
	
	
	
'
r
e
s
o
u
r
c
e
_
t
y
p
e
'
 
=
>
 
$
r
e
s
o
u
r
c
e
_
t
y
p
e
,

	
	
	
	
	
'
r
e
s
o
u
r
c
e
_
i
d
'
 
=
>
 
$
r
e
s
o
u
r
c
e
_
i
d
,

	
	
	
	
	
'
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d
'
 
=
>
 
$
r
e
s
o
u
r
c
e
_
i
d
_
r
e
q
u
i
r
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
/
/
p
o
s
t
_
u
p
l
o
a
d
_
p
r
o
c
e
s
s
i
n
g
_
t
r
i
g
g
e
r
,
 
o
p
t
i
o
n
a
l
 
f
o
r
 
p
o
s
t
 
p
r
o
c
e
s
s
i
n
g

	
	
	
	
i
f
 
(
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
)
 
{

	
	
	
	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
1
1
0
3
0
'
)
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
3
8
2
'
)
;

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

