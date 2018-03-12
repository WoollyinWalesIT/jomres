
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
2
e
d
i
t
_
t
a
r
i
f
f
s
_
n
o
r
m
a
l

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
d
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


 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
a
r
i
f
f
m
o
d
e
'
]
 
!
=
 
'
0
'
 
|
|
 
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
'
1
'
 
|
|
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
p
r
o
p
e
r
t
i
e
s
'
)
;


 
 
 
 
 
 
 
 
$
b
a
s
i
c
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
d
e
t
a
i
l
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
b
a
s
i
c
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
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
b
a
s
i
c
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
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
d
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
)
;


 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
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
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
g
e
t
_
a
l
l
_
r
o
o
m
s
(
$
d
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
)
;

	
	

	
	
$
b
a
s
i
c
_
r
a
t
e
_
d
e
t
a
i
l
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
b
a
s
i
c
_
r
a
t
e
_
d
e
t
a
i
l
s
'
 
)
;

	
	
$
b
a
s
i
c
_
r
a
t
e
_
d
e
t
a
i
l
s
-
>
g
e
t
_
r
a
t
e
s
(
$
d
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
)
;


	
	
/
/
w
e
 
n
e
e
d
 
t
h
e
 
j
r
r
p
o
r
t
a
l
_
r
a
t
e
s
 
o
b
j
e
c
t
 
t
o
 
c
r
e
a
t
e
 
a
 
t
a
r
i
f
f
t
y
p
e
 
i
d
 
i
f
 
n
o
n
e
 
e
x
i
s
t
s
 
f
o
r
 
t
h
e
 
e
x
i
s
t
i
n
g
 
r
a
t
e
 
u
i
d
s

	
	
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
r
p
o
r
t
a
l
_
r
a
t
e
s
'
)
;

	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
r
a
t
e
s
(
)
;

	
	
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
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
 
$
d
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
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

	
	
$
r
o
w
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
h
a
s
 
r
o
o
m
 
t
y
p
e
s
 
a
s
s
i
g
n
e
d

 
 
 
 
 
 
 
 
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
b
a
s
i
c
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
d
e
t
a
i
l
s
-
>
t
h
i
s
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
r
o
o
m
_
c
l
a
s
s
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
,
 
t
h
e
r
e
 
a
r
e
 
n
o
 
r
o
o
m
 
t
y
p
e
s
 
f
o
r
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e
.
 
Y
o
u
 
c
a
n
 
a
s
s
i
g
n
 
r
o
o
m
 
t
y
p
e
s
 
t
o
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
b
y
 
v
i
s
i
t
i
n
g
 
A
d
m
i
n
i
s
t
r
a
t
o
r
 
-
>
 
J
o
m
r
e
s
 
-
>
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e
 
-
>
 
a
n
d
 
e
d
i
t
i
n
g
 
t
h
e
 
r
o
o
m
/
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
'
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


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
f
o
r
 
S
R
P
s
 
t
o
 
m
a
k
e
 
s
u
r
e
 
t
h
e
y
 
d
o
n
`
t
 
h
a
v
e
 
m
o
r
e
 
t
h
a
n
 
o
n
e
 
r
o
o
m
s
 
c
r
e
a
t
e
d
.
 
T
O
D
O
:
 
m
a
y
 
n
o
t
 
b
e
 
n
e
e
d
e
d
 
a
n
y
m
o
r
e

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
1
'
 
&
&
 
c
o
u
n
t
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
r
o
o
m
s
)
 
>
 
1
)
 
{
 
/
/
 
L
o
o
k
s
 
l
i
k
e
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
h
a
s
 
c
h
a
n
g
e
d
 
f
r
o
m
 
M
R
P
 
t
o
 
S
R
P
.
 
L
e
t
'
s
 
c
l
e
a
n
 
t
h
i
n
g
s
 
u
p
 
a
n
d
 
s
t
a
r
t
 
a
n
e
w

	
	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
$
d
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
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
r
o
o
m
s
_
t
a
r
i
f
f
s
_
s
e
t
t
i
n
g
s
(
t
r
u
e
,
 
t
r
u
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
r
a
t
e
_
d
e
t
a
i
l
s
-
>
r
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}


	
	
/
/
g
e
t
 
e
x
i
s
t
i
n
g
 
r
o
o
m
s
 
a
n
d
 
t
a
r
i
f
f
s
 
d
a
t
a
 
w
e
 
n
e
e
d

	
	
/
/
n
o
r
m
a
l
 
m
o
d
e
 
c
r
e
a
t
e
d
 
j
u
s
t
 
o
n
e
 
r
a
t
e
s
_
u
i
d
 
a
n
d
 
o
n
e
 
t
a
r
i
f
f
t
y
p
e
_
i
d
 
f
o
r
 
e
a
c
h
 
r
o
o
m
 
t
y
p
e
,
 
t
h
e
r
e
 
c
a
n
`
t
 
b
e
 
m
o
r
e
 
f
o
r
 
t
h
e
 
s
a
m
e
 
r
o
o
m
 
t
y
p
e
.

	
	
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
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
d
e
t
a
i
l
s
-
>
t
h
i
s
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
r
o
o
m
_
c
l
a
s
s
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
k
 
]
[
 
'
r
o
o
m
_
u
i
d
s
'
 
]
 
=
 
a
r
r
a
y
(
)
;

	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
k
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
 
=
 
1
;

	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
 
=
 
0
;

	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
 
=
 
0
.
0
0
;

	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
'
 
]
 
=
 
1
;

	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
 
]
 
=
 
0
;

	
	
	

	
	
	
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
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
r
o
o
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
r
o
o
m
s
 
a
s
 
$
r
o
o
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
=
=
 
$
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
k
 
]
[
 
'
r
o
o
m
_
u
i
d
s
'
 
]
[
]
 
=
 
$
r
o
o
m
[
'
r
o
o
m
_
u
i
d
'
]
;

	
	
	
	
	
	

	
	
	
	
	
	
i
f
 
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
k
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
 
<
 
$
r
o
o
m
[
'
m
a
x
_
p
e
o
p
l
e
'
]
)
 
{

	
	
	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
k
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
 
=
 
$
r
o
o
m
[
'
m
a
x
_
p
e
o
p
l
e
'
]
;

	
	
	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
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
b
a
s
i
c
_
r
a
t
e
_
d
e
t
a
i
l
s
-
>
r
a
t
e
s
[
$
k
]
)
 
&
&
 
!
e
m
p
t
y
(
$
b
a
s
i
c
_
r
a
t
e
_
d
e
t
a
i
l
s
-
>
r
a
t
e
s
[
$
k
]
)
)
 
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
_
r
a
t
e
_
d
e
t
a
i
l
s
-
>
r
a
t
e
s
[
$
k
]
 
a
s
 
$
t
a
r
i
f
f
t
y
p
e
_
i
d
)
 
{

	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
t
a
r
i
f
f
t
y
p
e
_
i
d
 
a
s
 
$
r
a
t
e
)
 
{

	
	
	
	
	
	
i
f
 
(
$
r
a
t
e
[
'
r
o
o
m
c
l
a
s
s
_
u
i
d
'
]
 
=
=
 
$
k
)
 
{

	
	
	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
 
=
 
$
r
a
t
e
[
'
r
a
t
e
s
_
u
i
d
'
]
;

	
	
	
	
	
	
	

	
	
	
	
	
	
	
/
/
c
h
e
c
k
 
i
f
 
t
h
i
s
 
r
a
t
e
 
h
a
s
 
a
 
t
a
r
i
f
f
t
y
p
e
 
c
r
e
a
t
e
d
,
 
i
f
 
n
o
t
,
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
c
r
e
a
t
e
 
o
n
e

	
	
	
	
	
	
	
i
f
 
(
$
r
a
t
e
[
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
]
 
=
=
 
0
 
&
&
 
$
r
a
t
e
[
'
r
a
t
e
s
_
u
i
d
'
]
 
>
 
0
)
 
{

	
	
	
	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
 
]
 
=
 
$
j
r
p
o
r
t
a
l
_
r
a
t
e
s
-
>
g
e
t
_
t
a
r
i
f
f
t
y
p
e
_
i
d
(
$
r
a
t
e
[
'
r
a
t
e
s
_
u
i
d
'
]
)
;

	
	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
 
]
 
=
 
$
r
a
t
e
[
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
]
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
	

	
	
	
	
	
	
	
i
f
 
(
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
 
<
 
$
r
a
t
e
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
)
 
{

	
	
	
	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
 
=
 
$
r
a
t
e
[
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
]
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
	

	
	
	
	
	
	
	
i
f
 
(
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
'
 
]
 
<
 
$
r
a
t
e
[
'
m
a
x
p
e
o
p
l
e
'
]
)
 
{

	
	
	
	
	
	
	
	
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
k
 
]
[
 
'
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
'
 
]
 
=
 
$
r
a
t
e
[
'
m
a
x
p
e
o
p
l
e
'
]
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
}

	
	
}

	
	

	
	
/
/
t
o
o
l
b
a
r

	
	
$
j
r
t
b
a
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
o
m
r
e
s
_
t
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
s
a
v
e
'
,
 
'
'
,
 
'
'
,
 
t
r
u
e
,
 
'
s
a
v
e
_
n
o
r
m
a
l
m
o
d
e
_
t
a
r
i
f
f
s
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
;


	
	
/
/
l
a
b
e
l
s

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
A
G
E
T
I
T
L
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
.
'
 
&
a
m
p
;
 
'
.
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
O
O
M
C
L
A
S
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
N
U
M
B
E
R
O
F
R
O
O
M
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
N
U
M
B
E
R
O
F
R
O
O
M
S
A
V
A
I
L
A
B
L
E
'
,
 
'
_
J
O
M
R
E
S
_
N
U
M
B
E
R
O
F
R
O
O
M
S
A
V
A
I
L
A
B
L
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
P
R
O
P
E
R
T
Y
T
Y
P
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
O
O
M
T
Y
P
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
R
O
O
M
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
R
O
O
M
T
Y
P
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
M
A
X
P
E
O
P
L
E
_
R
O
O
M
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
R
O
O
M
'
,
 
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
R
O
O
M
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
M
A
X
P
E
O
P
L
E
_
T
A
R
I
F
F
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
B
O
O
K
I
N
G
'
,
 
'
J
O
M
R
E
S
_
M
A
X
P
E
O
P
L
E
I
N
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
)
;

	
	

	
	
/
/
M
R
P
s

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
0
'
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
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
d
e
t
a
i
l
s
-
>
t
h
i
s
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
r
o
o
m
_
c
l
a
s
s
e
s
 
a
s
 
$
r
o
o
m
t
y
p
e
_
i
d
 
 
=
>
 
$
r
)
 
{

	
	
	
	
$
r
w
 
=
 
a
r
r
a
y
(
)
;

	
	
	
	

	
	
	
	
$
t
h
i
s
_
r
o
o
m
t
y
p
e
_
c
o
u
n
t
 
=
 
c
o
u
n
t
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
_
u
i
d
s
'
 
]
)
;

	
	
	
	

	
	
	
	
$
r
w
[
 
'
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
 
]
 
=
 
$
r
[
'
a
b
b
v
'
]
;

	
	
	
	

	
	
	
	
$
r
w
[
 
'
R
O
O
M
N
U
M
B
E
R
D
R
O
P
D
O
W
N
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
0
0
,
 
3
0
0
,
 
1
,
 
"
n
u
m
b
e
r
o
f
R
o
o
m
s
[
$
r
o
o
m
t
y
p
e
_
i
d
]
"
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
'
,
 
$
t
h
i
s
_
r
o
o
m
t
y
p
e
_
c
o
u
n
t
,
 
'
%
0
2
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
'
<
i
n
p
u
t
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
n
a
m
e
=
"
r
o
o
m
r
a
t
e
p
e
r
d
a
y
[
'
.
$
r
o
o
m
t
y
p
e
_
i
d
.
'
]
"
 
v
a
l
u
e
=
"
'
.
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
.
'
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
[
 
'
M
A
X
_
P
E
O
P
L
E
_
R
O
O
M
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
0
1
,
 
1
0
0
,
 
1
,
 
"
m
a
x
_
p
e
o
p
l
e
[
$
r
o
o
m
t
y
p
e
_
i
d
]
"
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
'
,
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
,
 
'
%
0
2
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
[
 
'
M
A
X
_
P
E
O
P
L
E
_
T
A
R
I
F
F
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
0
1
,
 
1
0
0
,
 
1
,
 
"
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
[
$
r
o
o
m
t
y
p
e
_
i
d
]
"
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
'
,
 
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
m
a
x
p
e
o
p
l
e
_
t
a
r
i
f
f
'
 
]
,
 
'
%
0
2
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
[
 
'
E
X
I
S
T
I
N
G
R
O
O
M
S
'
 
]
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
e
x
i
s
t
i
n
g
r
o
o
m
s
[
'
.
$
r
o
o
m
t
y
p
e
_
i
d
.
'
]
"
 
v
a
l
u
e
=
"
'
.
i
m
p
l
o
d
e
(
'
,
'
,
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
_
u
i
d
s
'
 
]
)
.
'
"
 
/
>
'
;

	
	
	
	
$
r
w
[
 
'
T
A
R
I
F
F
T
Y
P
E
I
D
'
 
]
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
t
a
r
i
f
f
t
y
p
e
i
d
[
'
.
$
r
o
o
m
t
y
p
e
_
i
d
.
'
]
"
 
v
a
l
u
e
=
"
'
.
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
 
]
.
'
"
 
/
>
'
;

	
	
	
	
$
r
w
[
 
'
R
A
T
E
S
U
I
D
'
 
]
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
r
a
t
e
s
_
u
i
d
[
'
.
$
r
o
o
m
t
y
p
e
_
i
d
.
'
]
"
 
v
a
l
u
e
=
"
'
.
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
.
'
"
 
/
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
]
 
=
 
$
r
w
;

	
	
	
}

	
	
	

	
	
	
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
l
i
s
t
_
n
o
r
m
a
l
m
o
d
e
_
r
o
o
m
t
a
r
i
f
f
s
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
}
 
e
l
s
e
 
{
 
/
/
S
R
P
s

	
	
	
$
r
o
o
m
_
u
i
d
 
=
 
0
;

	
	
	
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
p
e
o
p
l
e
 
=
 
1
0
0
;

	
	
	
$
r
a
t
e
s
_
u
i
d
 
=
 
0
;

	
	
	
$
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
0
;


 
 
 
 
 
 
 
 
 
 
 
 
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
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
r
o
o
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s
-
>
r
o
o
m
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
=
 
$
r
o
o
m
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
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
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
p
e
o
p
l
e
 
=
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
m
a
x
_
p
e
o
p
l
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
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
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
_
u
i
d
 
=
 
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
a
t
e
s
_
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
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
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
t
y
p
e
_
i
d
 
=
 
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
t
a
r
i
f
f
t
y
p
e
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
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
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
=
 
$
e
x
i
s
t
i
n
g
_
t
a
r
i
f
f
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
r
a
t
e
p
e
r
d
a
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
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
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
_
u
i
d
s
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
_
u
i
d
s
'
 
]
)
)
 
{

	
	
	
	
$
r
o
o
m
_
u
i
d
 
=
 
$
e
x
i
s
t
i
n
g
_
r
o
o
m
s
[
 
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
]
[
 
'
r
o
o
m
_
u
i
d
s
'
 
]
[
0
]
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
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
o
u
t
p
u
t
[
 
'
R
A
T
E
T
E
X
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
R
A
T
E
T
E
X
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
'
<
i
n
p
u
t
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
n
a
m
e
=
"
r
o
o
m
r
a
t
e
p
e
r
d
a
y
"
 
v
a
l
u
e
=
"
'
.
$
r
o
o
m
r
a
t
e
p
e
r
d
a
y
.
'
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
A
X
_
P
E
O
P
L
E
'
 
]
 
=
 
'
<
i
n
p
u
t
 
c
l
a
s
s
=
"
i
n
p
u
t
-
m
i
n
i
"
 
t
y
p
e
=
"
t
e
x
t
"
 
n
a
m
e
=
"
m
a
x
_
p
e
o
p
l
e
"
 
v
a
l
u
e
=
"
'
.
$
m
a
x
_
p
e
o
p
l
e
.
'
"
 
/
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
b
a
s
i
c
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
d
e
t
a
i
l
s
-
>
t
h
i
s
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
r
o
o
m
_
c
l
a
s
s
e
s
 
a
s
 
$
r
o
o
m
t
y
p
e
_
i
d
 
 
=
>
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
 
=
 
'
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
l
e
c
t
e
d
_
r
o
o
m
t
y
p
e
_
i
d
 
=
=
 
(
i
n
t
)
$
r
o
o
m
t
y
p
e
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
 
=
 
'
c
h
e
c
k
e
d
=
"
c
h
e
c
k
e
d
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
[
 
'
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
 
]
 
=
 
$
r
[
'
a
b
b
v
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
w
[
 
'
R
O
O
M
_
C
L
A
S
S
_
R
A
D
I
O
'
 
]
 
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
r
a
d
i
o
"
 
n
a
m
e
=
"
r
o
o
m
t
y
p
e
"
 
i
d
=
"
'
.
$
r
o
o
m
t
y
p
e
_
i
d
.
'
"
 
v
a
l
u
e
=
"
'
.
$
r
o
o
m
t
y
p
e
_
i
d
.
'
"
 
'
.
$
s
e
l
e
c
t
e
d
.
'
>
 
'
.
$
r
w
[
 
'
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
'
 
]
.
'
<
/
l
a
b
e
l
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
]
 
=
 
$
r
w
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

	
	
	
$
o
u
t
p
u
t
[
'
R
O
O
M
U
I
D
'
]
 
=
 
$
r
o
o
m
_
u
i
d
;

	
	
	
$
o
u
t
p
u
t
[
'
R
A
T
E
S
U
I
D
'
]
 
=
 
$
r
a
t
e
s
_
u
i
d
;

	
	
	
$
o
u
t
p
u
t
[
'
T
A
R
I
F
F
T
Y
P
E
I
D
'
]
 
=
 
$
t
a
r
i
f
f
t
y
p
e
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
l
i
s
t
_
n
o
r
m
a
l
m
o
d
e
_
r
o
o
m
t
a
r
i
f
f
s
_
s
r
p
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

	
	
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

