
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

{

 
 
 
 
/
/
 
S
t
o
r
e
 
t
h
e
 
s
i
n
g
l
e
 
i
n
s
t
a
n
c
e
 
o
f
 
D
a
t
a
b
a
s
e

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
;


 
 
 
 
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
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
t
h
i
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
n
a
m
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

 
 
 
 
 
 
 
 
$
t
h
i
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
 
0
;


 
 
 
 
 
 
 
 
$
t
h
i
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
_
t
y
p
e
s
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
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
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
}


 
 
 
 
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
s
e
t
(
$
s
e
t
t
i
n
g
,
 
$
v
a
l
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
S
e
t
t
i
n
g
 
'
.
$
s
e
t
t
i
n
g
.
'
 
t
o
 
'
.
$
v
a
l
u
e
.
'
 
<
b
r
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
 
=
 
$
v
a
l
u
e
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
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
g
e
t
(
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
G
e
t
t
i
n
g
 
'
.
$
s
e
t
t
i
n
g
.
'
 
w
h
i
c
h
 
i
s
 
'
.
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
.
'
<
b
r
>
'
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
t
h
i
s
-
>
$
s
e
t
t
i
n
g
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
=
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
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
"
S
e
t
t
i
n
g
 
d
o
e
s
n
'
t
 
e
x
i
s
t
 
"
.
$
s
e
t
t
i
n
g
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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

 
 
 
 
}


 
 
 
 
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
n
a
m
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
 
=
 
0
,
 
$
e
d
i
t
a
b
l
e
 
=
 
t
r
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
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
 
=
=
 
0
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
 
$
t
h
i
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
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
n
a
m
e
s
[
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
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
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
n
a
m
e
_
m
u
l
t
i
(
a
r
r
a
y
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
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
n
a
m
e
 
=
 
$
t
h
i
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
n
a
m
e
s
[
 
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
 
]
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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
n
a
m
e
;

 
 
 
 
}


 
 
 
 
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
n
a
m
e
_
m
u
l
t
i
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
s
 
=
 
a
r
r
a
y
(
)
,
 
$
d
a
t
a
b
a
s
e
_
o
b
j
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
r
e
t
u
r
n
 
f
a
l
s
e
 
i
f
 
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
s
 
i
n
 
t
h
e
 
a
r
r
a
y
/
o
b
j
e
c
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
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
 
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
c
u
s
t
o
m
_
t
e
x
t
'
)
;


 
 
 
 
 
 
 
 
/
/
c
h
a
n
g
e
 
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
s
 
o
b
j
e
c
t
 
t
o
 
a
r
r
a
y

 
 
 
 
 
 
 
 
i
f
 
(
$
d
a
t
a
b
a
s
e
_
o
b
j
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
a
r
r
 
=
 
a
r
r
a
y
(
)
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
s
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
a
r
r
[
]
 
=
 
$
i
d
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
_
a
r
r
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
s
 
=
 
$
t
m
p
_
a
r
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
m
p
_
a
r
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
w
e
`
r
e
 
g
e
t
t
i
n
g
 
p
r
o
p
e
r
t
y
 
n
a
m
e
s
 
f
o
r
 
a
l
l
 
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
 
i
n
 
t
h
e
 
s
y
s
t
e
m

 
 
 
 
 
 
 
 
s
o
r
t
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
s
)
;

 
 
 
 
 
 
 
 
$
a
l
l
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
_
i
n
_
s
y
s
t
e
m
 
=
 
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
a
l
l
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
_
i
n
_
s
y
s
t
e
m
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
a
l
l
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
_
i
n
_
s
y
s
t
e
m
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
o
r
t
(
$
a
l
l
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
_
i
n
_
s
y
s
t
e
m
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
f
f
 
=
 
a
r
r
a
y
_
d
i
f
f
(
$
a
l
l
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
_
i
n
_
s
y
s
t
e
m
,
 
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
s
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
f
f
 
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


	
	
$
o
r
i
g
i
n
a
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
u
i
d
 
=
 
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
)
;


	
	
/
/
u
n
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
s
 
t
h
a
t
 
a
l
r
e
a
d
y
 
h
a
v
e
 
b
e
e
n
 
h
a
n
d
l
e
d
 
b
y
 
$
t
h
i
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
_
m
u
l
t
i
(
)
 
f
u
n
c
t
i
o
n

	
	
$
t
e
m
p
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
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
s
 
a
s
 
$
i
d
)
 
{

	
	
	
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
$
i
d
]
)
 
&
&
 
!
i
s
s
e
t
(
$
t
h
i
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
n
a
m
e
s
[
 
$
i
d
 
]
)
)
 
{

	
	
	
	
$
t
e
m
p
_
a
r
r
a
y
[
]
 
=
 
$
i
d
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
i
s
s
e
t
(
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
$
i
d
]
[
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
n
a
m
e
'
]
)
)
 
{

	
	
	
	
	
$
t
h
i
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
n
a
m
e
s
[
 
$
i
d
 
]
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
$
i
d
]
[
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
n
a
m
e
'
]
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	
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
s
 
=
 
$
t
e
m
p
_
a
r
r
a
y
;

	
	
u
n
s
e
t
(
$
t
e
m
p
_
a
r
r
a
y
)
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
s
)
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
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
`
,
 
`
p
r
o
p
e
r
t
y
_
n
a
m
e
`
,
 
`
p
t
y
p
e
_
i
d
`
 
F
R
O
M
 
#
_
_
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
y
s
 
W
H
E
R
E
 
`
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
`
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
)
.
'
)
 
'
;

	
	
	
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
n
a
m
e
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	
	
i
f
 
(
!
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
h
e
a
v
y
w
e
i
g
h
t
_
s
y
s
t
e
m
'
)
)
 
{

	
	
	
	
/
/
g
e
t
 
c
u
s
t
o
m
 
t
e
x
t
 
f
o
r
 
t
h
e
s
e
 
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

	
	
	
	
$
c
u
s
t
o
m
T
e
x
t
O
b
j
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
s
)
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
p
r
o
p
e
r
t
y
_
n
a
m
e
s
 
a
s
 
$
p
)
 
{

	
	
	
	
	
/
/
 
W
e
 
n
e
e
d
 
t
o
 
s
e
t
 
s
h
o
w
t
i
m
e
 
h
e
r
e
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
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
 
f
u
n
c
t
i
o
n
 
w
o
n
'
t
 
k
n
o
w
 
w
h
i
c
h
 
p
r
o
p
e
r
t
y
'
s
 
i
n
f
o
 
w
e
'
r
e
 
l
o
o
k
i
n
g
 
f
o
r

	
	
	
	
	
s
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
,
 
$
p
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
)
;


	
	
	
	
	
$
t
h
i
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
n
a
m
e
s
[
 
$
p
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
,
 
$
p
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
n
a
m
e
,
 
f
a
l
s
e
)
;

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
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
p
r
o
p
e
r
t
y
_
n
a
m
e
s
 
a
s
 
$
p
)
 
{

	
	
	
	
	
$
t
h
i
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
n
a
m
e
s
[
 
$
p
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
 
]
 
=
 
$
p
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
n
a
m
e
;

	
	
	
	
}

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
e
t
 
b
a
c
k
 
t
h
e
 
i
n
i
t
i
a
l
 
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

 
 
 
 
 
 
 
 
 
 
 
 
s
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
,
 
$
o
r
i
g
i
n
a
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
u
i
d
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
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
n
a
m
e
s
;

 
 
 
 
}


 
 
 
 
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
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
 
=
=
 
$
t
h
i
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
)
 
{
 
/
/
 
N
o
 
n
e
e
d
 
t
o
 
r
e
-
g
a
t
h
e
r
 
t
h
e
 
i
n
f
o

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
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
 
(
i
n
t
)
 
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
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
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
=
 
0
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
P
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
 
n
o
t
 
s
e
t
'
,
 
2
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
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
_
m
u
l
t
i
(
a
r
r
a
y
(
$
t
h
i
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
)
)
;
 
/
/
i
f
 
m
o
r
e
 
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
 
a
r
e
 
o
n
 
t
h
e
 
s
a
m
e
 
p
a
g
e
 
(
f
o
r
 
e
x
a
m
p
l
e
 
i
f
 
w
e
 
h
a
v
e
 
a
n
 
N
G
M
 
m
o
d
u
l
e
 
p
u
b
l
i
s
h
e
d
)
 
a
n
d
 
c
h
a
n
g
e
s
 
t
h
e
 
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
 
s
h
o
w
t
i
m
e
,
 
w
h
e
n
 
t
h
e
 
s
h
o
w
t
i
m
e
 
i
s
 
s
e
t
 
b
a
c
k
 
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
 
u
i
d
,
 
t
h
e
 
q
u
e
r
y
 
w
i
l
l
 
b
e
 
e
x
e
c
u
t
e
d
 
a
g
a
i
n
,
 
b
e
c
a
u
s
e
 
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
 
u
i
d
 
i
s
 
n
o
t
 
i
n
 
t
h
e
 
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
.
 
S
o
 
w
e
 
u
s
e
 
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
_
m
u
l
t
i
 
t
o
 
g
e
t
 
d
a
t
a
 
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
_
u
i
d
,
 
t
h
e
n
 
r
e
u
s
e
 
t
h
i
s
 
d
a
t
a
 
l
a
t
e
r
 
f
r
o
m
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
 
i
f
 
n
e
c
e
s
s
a
r
y
.


 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
$
t
h
i
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
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
n
a
m
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
s
t
r
e
e
t
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
s
t
r
e
e
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
t
o
w
n
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
t
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
p
o
s
t
c
o
d
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
p
o
s
t
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
r
e
g
i
o
n
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
r
e
g
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
r
e
g
i
o
n
_
i
d
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
r
e
g
i
o
n
_
i
d
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
c
o
u
n
t
r
y
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
c
o
u
n
t
r
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
c
o
u
n
t
r
y
_
c
o
d
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
c
o
u
n
t
r
y
_
c
o
d
e
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
t
e
l
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
t
e
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
f
a
x
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
f
a
x
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
e
m
a
i
l
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
e
m
a
i
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
u
b
l
i
s
h
e
d
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
p
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
t
y
p
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
t
y
p
e
_
t
i
t
l
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
t
y
p
e
_
t
i
t
l
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
r
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
s
t
a
r
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
p
e
r
i
o
r
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
s
u
p
e
r
i
o
r
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
a
t
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
l
a
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
n
g
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
l
o
n
g
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
e
t
a
t
i
t
l
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
m
e
t
a
t
i
t
l
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
e
t
a
k
e
y
w
o
r
d
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
m
e
t
a
k
e
y
w
o
r
d
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
f
e
a
t
u
r
e
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
f
e
a
t
u
r
e
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
m
a
p
p
i
n
g
l
i
n
k
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
m
a
p
p
i
n
g
l
i
n
k
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
p
r
o
p
e
r
t
y
_
p
r
i
c
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
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
p
r
o
p
e
r
t
y
_
p
r
i
c
e
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
d
e
s
c
r
i
p
t
i
o
n
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
c
h
e
c
k
i
n
_
t
i
m
e
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
c
h
e
c
k
i
n
_
t
i
m
e
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
a
i
r
p
o
r
t
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
a
i
r
p
o
r
t
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
i
k
e
y
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
a
p
i
k
e
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
a
p
p
r
o
v
e
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
e
r
m
i
t
_
n
u
m
b
e
r
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
p
e
r
m
i
t
_
n
u
m
b
e
r
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
o
m
p
l
e
t
e
d
 
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
c
o
m
p
l
e
t
e
d
'
 
]
;

	
	
	
$
t
h
i
s
-
>
c
a
t
_
i
d
 
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
c
a
t
_
i
d
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
'
 
]
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
_
t
y
p
e
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
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
t
h
i
s
-
>
r
o
o
m
_
t
y
p
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
r
o
o
m
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
r
o
o
m
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
b
y
_
t
y
p
e
 
=
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
r
o
o
m
s
_
b
y
_
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
_
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
t
h
i
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
 
]
[
 
'
r
o
o
m
s
_
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
t
h
i
s
-
>
r
o
o
m
s
_
b
y
_
t
y
p
e
 
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
-
>
r
o
o
m
s
_
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
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
*
 
e
l
s
e

 
 
 
 
 
 
 
 
 
 
 
 
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
"
P
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
 
d
o
e
s
n
`
t
 
e
x
i
s
t
"
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
*
/


 
 
 
 
 
 
 
 
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
$
t
h
i
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
)
;


 
 
 
 
 
 
 
 
/
/
g
e
t
 
a
l
l
 
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

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
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
r
o
o
m
_
t
y
p
e
s
'
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
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
_
t
y
p
e
s
(
)
;


 
 
 
 
 
 
 
 
$
t
h
i
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
 
=
 
a
r
r
a
y
(
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
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
[
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
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
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
[
$
t
h
i
s
-
>
p
t
y
p
e
_
i
d
]
 
a
s
 
$
r
t
y
p
e
)
 
{

	
	
	
	
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
t
h
i
s
-
>
c
l
a
s
s
A
b
b
v
s
[
 
$
r
t
y
p
e
 
]
)
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
[
 
$
r
t
y
p
e
 
]
 
=
 
$
t
h
i
s
-
>
c
l
a
s
s
A
b
b
v
s
[
 
$
r
t
y
p
e
 
]
;

	
	
	
	
}

	
	
	
}

	
	
}


 
 
 
 
 
 
 
 
$
b
a
n
g
 
=
 
e
x
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
t
h
i
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
f
e
a
t
u
r
e
s
)
;

 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
 
=
 
a
r
r
a
y
(
)
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
n
g
 
a
s
 
$
b
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
b
 
!
=
 
0
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
F
e
a
t
u
r
e
s
A
r
r
a
y
[
 
]
 
=
 
(
i
n
t
)
 
$
b
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
e
a
t
u
r
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
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
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
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
e
a
t
u
r
e
s
[
$
f
]
[
'
a
b
b
v
'
]
 
=
 
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
e
s
[
$
f
]
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
t
h
i
s
-
>
f
e
a
t
u
r
e
s
[
$
f
]
[
'
d
e
s
c
'
]
 
=
 
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
e
s
[
$
f
]
[
'
d
e
s
c
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
j
o
m
r
e
s
/
'
,
 
'
/
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
/
'
,
 
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
e
s
[
$
f
]
[
'
i
m
a
g
e
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
e
a
t
u
r
e
s
[
$
f
]
[
'
i
m
a
g
e
'
]
 
=
 
$
i
m
a
g
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
e
a
t
u
r
e
s
[
$
f
]
[
'
c
a
t
_
i
d
'
]
 
=
 
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
e
s
[
$
f
]
[
'
c
a
t
_
i
d
'
]
;

	
	
	
	
$
t
h
i
s
-
>
f
e
a
t
u
r
e
s
[
$
f
]
[
'
c
a
t
_
t
i
t
l
e
'
]
 
=
 
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
e
s
[
$
f
]
[
'
c
a
t
_
t
i
t
l
e
'
]
;

	
	
	
	
$
t
h
i
s
-
>
f
e
a
t
u
r
e
s
[
$
f
]
[
'
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
'
]
 
=
 
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
e
s
[
$
f
]
[
'
i
n
c
l
u
d
e
_
i
n
_
f
i
l
t
e
r
s
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
_
g
r
o
s
s
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
r
i
c
e
(
$
n
e
t
t
_
a
m
o
u
n
t
,
 
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
n
e
t
t
_
a
m
o
u
n
t
 
=
 
(
f
l
o
a
t
)
 
$
n
e
t
t
_
a
m
o
u
n
t
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
t
a
x
r
a
t
e
 
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
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;


 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
$
t
h
i
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
f
g
c
o
d
e
 
=
 
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
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
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
c
f
g
c
o
d
e
 
]
[
 
'
r
a
t
e
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
=
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
a
x
 
=
 
(
$
n
e
t
t
_
a
m
o
u
n
t
 
/
 
1
0
0
)
 
*
 
$
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
;

 
 
 
 
 
 
 
 
$
g
r
o
s
s
 
=
 
$
n
e
t
t
_
a
m
o
u
n
t
 
+
 
$
t
a
x
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
g
r
o
s
s
;

 
 
 
 
}


 
 
 
 
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
_
n
e
t
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
r
i
c
e
(
$
g
r
o
s
s
_
a
m
o
u
n
t
,
 
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
g
r
o
s
s
_
a
m
o
u
n
t
 
=
 
(
f
l
o
a
t
)
 
$
g
r
o
s
s
_
a
m
o
u
n
t
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
t
a
x
r
a
t
e
 
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
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;


 
 
 
 
 
 
 
 
i
f
 
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
 
!
=
 
$
t
h
i
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
f
g
c
o
d
e
 
=
 
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
=
 
(
f
l
o
a
t
)
 
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
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
c
f
g
c
o
d
e
 
]
[
 
'
r
a
t
e
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
=
 
$
t
h
i
s
-
>
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
d
i
v
i
s
o
r
 
=
 
(
$
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
 
/
 
1
0
0
)
 
+
 
1
;

 
 
 
 
 
 
 
 
$
n
e
t
t
 
=
 
$
g
r
o
s
s
_
a
m
o
u
n
t
 
/
 
$
d
i
v
i
s
o
r
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
n
e
t
t
;

 
 
 
 
}


 
 
 
 
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
_
m
u
l
t
i
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
s
 
=
 
a
r
r
a
y
(
)
,
 
$
e
d
i
t
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
n
o
_
h
t
m
l
 
=
 
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
n
o
_
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
p
o
p
u
p
 
=
 
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
p
o
p
u
p
'
)
;

 
 
 
 
 
 
 
 
/
/
$
e
d
i
t
a
b
l
e
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
i
f
 
(
$
n
o
_
h
t
m
l
 
=
=
 
'
1
'
 
|
|
 
$
p
o
p
u
p
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
d
i
t
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
F
i
r
s
t
 
w
e
 
n
e
e
d
 
t
o
 
e
x
t
r
a
c
t
 
t
h
o
s
e
 
u
i
d
s
 
t
h
a
t
 
a
r
e
 
n
o
t
 
a
l
r
e
a
d
y
 
i
n
 
t
h
e
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
 
v
a
r
,
 
t
h
i
s
 
(
m
a
y
)
 
r
e
d
u
c
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
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
 
w
e
 
n
e
e
d
 
t
o
 
q
u
e
r
y

 
 
 
 
 
 
 
 
$
t
e
m
p
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
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
s
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
$
i
d
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
a
r
r
a
y
[
 
]
 
=
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
s
 
=
 
$
t
e
m
p
_
a
r
r
a
y
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
e
m
p
_
a
r
r
a
y
)
;


 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
 
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
c
u
s
t
o
m
_
t
e
x
t
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
t
a
x
r
a
t
e
 
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
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;

	
	
$
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
p
r
o
p
e
r
t
y
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
p
r
o
p
e
r
t
y
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
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 

	
	
	
	
	
	
	
`
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
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
n
a
m
e
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
s
t
r
e
e
t
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
t
o
w
n
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
p
o
s
t
c
o
d
e
`
,

	
	
	
	
	
	
	
`
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
e
g
i
o
n
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
c
o
u
n
t
r
y
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
t
e
l
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
f
a
x
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
e
m
a
i
l
`
,

	
	
	
	
	
	
	
`
p
u
b
l
i
s
h
e
d
`
,

	
	
	
	
	
	
	
`
p
t
y
p
e
_
i
d
`
,

	
	
	
	
	
	
	
`
s
t
a
r
s
`
,

	
	
	
	
	
	
	
`
s
u
p
e
r
i
o
r
`
,

	
	
	
	
	
	
	
`
l
a
t
`
,

	
	
	
	
	
	
	
`
l
o
n
g
`
,

	
	
	
	
	
	
	
`
m
e
t
a
t
i
t
l
e
`
,

	
	
	
	
	
	
	
`
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
	
`
m
e
t
a
k
e
y
w
o
r
d
s
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
m
a
p
p
i
n
g
l
i
n
k
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
k
e
y
`
,

	
	
	
	
	
	
	
`
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
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
`
,

	
	
	
	
	
	
	
`
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
`
,

	
	
	
	
	
	
	
`
a
p
i
k
e
y
`
,

	
	
	
	
	
	
	
`
a
p
p
r
o
v
e
d
`
,

	
	
	
	
	
	
	
`
p
e
r
m
i
t
_
n
u
m
b
e
r
`
,

	
	
	
	
	
	
	
`
c
o
m
p
l
e
t
e
d
`
,

	
	
	
	
	
	
	
`
c
a
t
_
i
d
`
 

	
	
	
	
	
	
F
R
O
M
 
#
_
_
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
y
s
 

	
	
	
	
	
	
W
H
E
R
E
 
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
 
I
N
 
(
'
 
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
D
a
t
a
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


	
	
	
/
/
l
o
a
d
 
a
l
l
 
p
r
o
p
e
r
t
y
 
s
p
e
c
i
f
i
c
 
s
e
t
t
i
n
g
s

	
	
	
$
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
p
r
o
p
e
r
t
y
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
-
>
g
e
t
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
s
e
t
t
i
n
g
s
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
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
c
u
s
t
o
m
 
t
e
x
t
 
f
o
r
 
t
h
e
s
e
 
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

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
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
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
a
v
e
 
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
 
a
n
d
 
t
y
p
e
 
s
o
 
w
e
 
c
a
n
 
r
e
s
e
t
 
t
h
i
s
 
a
f
t
e
r
 
w
e
`
r
e
 
d
o
n
e

 
 
 
 
 
 
 
 
 
 
 
 
$
o
r
i
g
i
n
a
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
u
i
d
 
=
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
r
i
g
i
n
a
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
t
y
p
e
 
=
 
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
p
r
o
p
e
r
t
y
_
t
y
p
e
'
)
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
p
r
o
p
e
r
t
y
D
a
t
a
 
a
s
 
$
d
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
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
,
 
$
d
a
t
a
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
t
h
i
s
-
>
a
l
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
t
y
p
e
s
[
 
(
i
n
t
)
 
$
d
a
t
a
-
>
p
t
y
p
e
_
i
d
 
]
 
)
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
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
p
r
o
p
e
r
t
y
_
t
y
p
e
'
,
 
$
t
h
i
s
-
>
a
l
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
t
y
p
e
s
[
 
(
i
n
t
)
 
$
d
a
t
a
-
>
p
t
y
p
e
_
i
d
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
r
y
n
a
m
e
 
=
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
(
$
d
a
t
a
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
c
o
u
n
t
r
y
)
;


	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
 
=
 
(
i
n
t
)
 
$
d
a
t
a
-
>
p
u
b
l
i
s
h
e
d
;

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
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
'
 
]
 
=
 
$
d
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
n
a
m
e
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
,
 
$
d
a
t
a
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
n
a
m
e
,
 
$
e
d
i
t
a
b
l
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
s
t
r
e
e
t
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
S
T
R
E
E
T
'
,
 
$
d
a
t
a
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
s
t
r
e
e
t
,
 
$
e
d
i
t
a
b
l
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
t
o
w
n
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
,
 
$
d
a
t
a
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
t
o
w
n
,
 
$
e
d
i
t
a
b
l
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
p
o
s
t
c
o
d
e
'
 
]
 
=
 
$
d
a
t
a
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
p
o
s
t
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
m
e
r
i
c
(
$
d
a
t
a
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
r
e
g
i
o
n
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
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
r
e
g
i
o
n
s
'
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
 
r
e
g
i
o
n
 
i
d
 
e
x
i
s
t
s

	
	
	
	
	
i
f
 
(
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
n
a
m
e
(
$
d
a
t
a
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
r
e
g
i
o
n
)
 
=
=
 
n
u
l
l
 
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
 
=
 
0
;

	
	
	
	
	
	
i
f
 
(
(
i
n
t
)
 
$
d
a
t
a
-
>
p
u
b
l
i
s
h
e
d
 
=
=
 
1
 
)
 
{

	
	
	
	
	
	
	
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
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
y
s
 
S
E
T
 
`
p
u
b
l
i
s
h
e
d
`
 
=
 
0
 
W
H
E
R
E
 
`
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
`
 
=
 
"
.
(
i
n
t
)
$
d
a
t
a
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
.
'
 
L
I
M
I
T
 
1
'
;

	
	
	
	
	
	
	
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
"
S
y
s
t
e
m
 
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
 
u
n
p
u
b
l
i
s
h
e
d
 
p
r
o
p
e
r
t
y
 
w
i
t
h
 
i
n
c
o
r
r
e
c
t
 
r
e
g
i
o
n
 
i
d
"
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
r
e
g
i
o
n
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
U
S
T
O
M
T
E
X
T
_
R
E
G
I
O
N
S
_
'
.
$
d
a
t
a
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
r
e
g
i
o
n
,
 
$
j
o
m
r
e
s
_
r
e
g
i
o
n
s
-
>
g
e
t
_
r
e
g
i
o
n
_
n
a
m
e
(
$
d
a
t
a
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
r
e
g
i
o
n
)
,
 
$
e
d
i
t
a
b
l
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
r
e
g
i
o
n
_
i
d
'
 
]
 
=
 
$
d
a
t
a
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
r
e
g
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
T
h
i
s
 
i
s
 
a
 
f
a
l
l
b
a
c
k
 
f
o
r
 
o
l
d
e
r
 
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
 
t
h
a
t
 
u
s
e
d
 
t
o
 
u
s
e
 
r
e
g
i
o
n
 
n
a
m
e
s
 
i
n
s
t
e
a
d
 
o
f
 
r
e
g
i
o
n
 
i
d
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
r
e
g
i
o
n
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
R
E
G
I
O
N
'
,
 
$
d
a
t
a
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
r
e
g
i
o
n
,
 
$
e
d
i
t
a
b
l
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
r
e
g
i
o
n
_
i
d
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
c
o
u
n
t
r
y
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
C
O
U
N
T
R
Y
'
,
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
(
$
d
a
t
a
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
c
o
u
n
t
r
y
)
,
 
$
e
d
i
t
a
b
l
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
c
o
u
n
t
r
y
_
c
o
d
e
'
 
]
 
=
 
$
d
a
t
a
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
c
o
u
n
t
r
y
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
t
e
l
'
 
]
 
=
 
$
d
a
t
a
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
t
e
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
f
a
x
'
 
]
 
=
 
$
d
a
t
a
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
f
a
x
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
e
m
a
i
l
'
 
]
 
=
 
$
d
a
t
a
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
e
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
p
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
 
(
i
n
t
)
 
$
d
a
t
a
-
>
p
t
y
p
e
_
i
d
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
t
h
i
s
-
>
a
l
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
t
y
p
e
s
[
 
(
i
n
t
)
 
$
d
a
t
a
-
>
p
t
y
p
e
_
i
d
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
t
y
p
e
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
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
t
y
p
e
s
[
 
(
i
n
t
)
 
$
d
a
t
a
-
>
p
t
y
p
e
_
i
d
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
t
y
p
e
_
t
i
t
l
e
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
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
t
y
p
e
_
t
i
t
l
e
s
[
 
(
i
n
t
)
 
$
d
a
t
a
-
>
p
t
y
p
e
_
i
d
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
s
t
a
r
s
'
 
]
 
=
 
(
i
n
t
)
 
$
d
a
t
a
-
>
s
t
a
r
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
s
u
p
e
r
i
o
r
'
 
]
 
=
 
(
i
n
t
)
 
$
d
a
t
a
-
>
s
u
p
e
r
i
o
r
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
l
a
t
'
 
]
 
=
 
$
d
a
t
a
-
>
l
a
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
l
o
n
g
'
 
]
 
=
 
$
d
a
t
a
-
>
l
o
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
m
e
t
a
t
i
t
l
e
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
T
I
T
L
E
'
,
 
$
d
a
t
a
-
>
m
e
t
a
t
i
t
l
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
D
E
S
C
R
I
P
T
I
O
N
'
,
 
$
d
a
t
a
-
>
m
e
t
a
d
e
s
c
r
i
p
t
i
o
n
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
m
e
t
a
k
e
y
w
o
r
d
s
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
M
E
T
A
K
E
Y
W
O
R
D
S
'
,
 
$
d
a
t
a
-
>
m
e
t
a
k
e
y
w
o
r
d
s
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
f
e
a
t
u
r
e
s
'
 
]
 
=
 
$
d
a
t
a
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
f
e
a
t
u
r
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
m
a
p
p
i
n
g
l
i
n
k
'
 
]
 
=
 
$
d
a
t
a
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
m
a
p
p
i
n
g
l
i
n
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
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
p
r
o
p
e
r
t
y
_
p
r
i
c
e
'
 
]
 
=
 
$
d
a
t
a
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
k
e
y
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
d
e
s
c
r
i
p
t
i
o
n
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
$
d
a
t
a
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
d
e
s
c
r
i
p
t
i
o
n
,
 
$
e
d
i
t
a
b
l
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
c
h
e
c
k
i
n
_
t
i
m
e
s
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
C
H
E
C
K
I
N
T
I
M
E
S
'
,
 
$
d
a
t
a
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
c
h
e
c
k
i
n
_
t
i
m
e
s
,
 
$
e
d
i
t
a
b
l
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
A
R
E
A
A
C
T
I
V
I
T
I
E
S
'
,
 
$
d
a
t
a
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
,
 
$
e
d
i
t
a
b
l
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
I
R
E
C
T
I
O
N
S
'
,
 
$
d
a
t
a
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
,
 
$
e
d
i
t
a
b
l
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
a
i
r
p
o
r
t
s
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
A
I
R
P
O
R
T
S
'
,
 
$
d
a
t
a
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
a
i
r
p
o
r
t
s
,
 
$
e
d
i
t
a
b
l
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
O
T
H
E
R
T
R
A
N
S
P
O
R
T
'
,
 
$
d
a
t
a
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
,
 
$
e
d
i
t
a
b
l
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
'
 
]
 
=
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
_
D
I
S
C
L
A
I
M
E
R
S
'
,
 
$
d
a
t
a
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
,
 
$
e
d
i
t
a
b
l
e
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
a
p
i
k
e
y
'
 
]
 
=
 
$
d
a
t
a
-
>
a
p
i
k
e
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
a
p
p
r
o
v
e
d
'
 
]
 
=
 
(
i
n
t
)
$
d
a
t
a
-
>
a
p
p
r
o
v
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
p
e
r
m
i
t
_
n
u
m
b
e
r
'
 
]
 
=
 
(
s
t
r
i
n
g
)
 
$
d
a
t
a
-
>
p
e
r
m
i
t
_
n
u
m
b
e
r
;

	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
c
o
m
p
l
e
t
e
d
'
 
]
 
=
 
(
i
n
t
)
$
d
a
t
a
-
>
c
o
m
p
l
e
t
e
d
;

	
	
	
	
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
a
t
a
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
 
]
[
 
'
c
a
t
_
i
d
'
 
]
 
=
 
(
i
n
t
)
$
d
a
t
a
-
>
c
a
t
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
n
a
m
e
s
[
$
d
a
t
a
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
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
,
 
$
d
a
t
a
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
n
a
m
e
,
 
$
e
d
i
t
a
b
l
e
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
t
e
m
p
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
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
r
o
o
m
_
u
i
d
`
,
`
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
`
,
`
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
`
,
`
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
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
s
 
W
H
E
R
E
 
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
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
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
s
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
r
o
o
m
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
 
]
[
 
'
r
o
o
m
s
'
 
]
[
 
$
r
o
o
m
-
>
r
o
o
m
_
u
i
d
 
]
 
=
 
$
r
o
o
m
-
>
r
o
o
m
_
u
i
d
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
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
o
o
m
-
>
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
r
o
o
m
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
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
'
 
]
[
 
$
r
o
o
m
-
>
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
 
]
[
 
'
a
b
b
v
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
o
o
m
-
>
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
 
]
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
_
a
b
b
v
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
r
o
o
m
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
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
'
 
]
[
 
$
r
o
o
m
-
>
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
 
]
[
 
'
d
e
s
c
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
o
o
m
-
>
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
 
]
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
_
f
u
l
l
_
d
e
s
c
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
r
o
o
m
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
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
'
 
]
[
 
$
r
o
o
m
-
>
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
 
]
[
 
'
i
m
a
g
e
'
 
]
 
=
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
o
o
m
-
>
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
 
]
[
 
'
i
m
a
g
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
r
o
o
m
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
 
]
[
 
'
r
o
o
m
s
_
b
y
_
t
y
p
e
'
 
]
[
 
$
r
o
o
m
-
>
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
 
]
[
]
 
=
 
$
r
o
o
m
-
>
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
r
o
o
m
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
 
]
[
 
'
r
o
o
m
s
_
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
[
 
$
r
o
o
m
-
>
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
 
]
[
$
r
o
o
m
-
>
r
o
o
m
_
u
i
d
]
 
=
 
$
r
o
o
m
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
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
D
a
t
a
 
a
s
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
$
d
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
f
g
c
o
d
e
 
=
 
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
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
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
c
f
g
c
o
d
e
 
]
[
 
'
r
a
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
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
 
]
[
 
'
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
'
 
]
 
=
 
(
f
l
o
a
t
)
 
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
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
[
 
$
c
f
g
c
o
d
e
 
]
[
 
'
r
a
t
e
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
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
d
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
 
]
[
 
'
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
r
a
t
e
'
 
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
e
t
 
b
a
c
k
 
t
h
e
 
i
n
i
t
i
a
l
 
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
 
a
n
d
 
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

 
 
 
 
 
 
 
 
 
 
 
 
s
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
,
 
$
o
r
i
g
i
n
a
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
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
s
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
p
r
o
p
e
r
t
y
_
t
y
p
e
'
,
 
$
o
r
i
g
i
n
a
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
t
y
p
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
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
_
a
l
l
_
r
o
o
m
_
t
y
p
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
l
a
s
s
A
b
b
v
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
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
t
y
p
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
y
t
y
p
e
s
_
x
r
e
f
 
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
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
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
r
o
o
m
_
t
y
p
e
s
'
)
;

	
	
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
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
_
t
y
p
e
s
(
)
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
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
r
o
o
m
_
t
y
p
e
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
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
r
o
o
m
_
t
y
p
e
s
 
a
s
 
$
r
t
)
 
{

	
	
	
	
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
t
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
 
]
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
 
$
r
t
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

	
	
	
	
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
t
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
 
]
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
_
a
b
b
v
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
S
_
A
B
B
V
'
.
$
r
t
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
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
t
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
_
a
b
b
v
'
]
)
,
 
f
a
l
s
e
)
;

	
	
	
	
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
t
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
 
]
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
_
f
u
l
l
_
d
e
s
c
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
S
_
D
E
S
C
'
.
$
r
t
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
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
t
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
_
f
u
l
l
_
d
e
s
c
'
]
)
,
 
f
a
l
s
e
)
;

	
	
	
	
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
t
y
p
e
s
[
 
$
r
t
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
 
]
[
 
'
i
m
a
g
e
'
 
]
 
=
 
$
r
t
[
'
i
m
a
g
e
'
]
;


	
	
	
	
/
/
 
T
o
 
a
 
d
e
g
r
e
e
,
 
t
h
i
s
 
i
s
 
a
 
d
u
p
l
i
c
a
t
i
o
n
 
o
f
 
e
f
f
o
r
t
,
 
h
o
w
e
v
e
r
 
w
e
 
d
o
n
'
t
 
k
n
o
w
 
i
f
 
o
t
h
e
r
 
s
c
r
i
p
t
s
 
a
r
e
 
u
s
i
n
g
 
t
h
e
 
$
t
h
i
s
-
>
c
l
a
s
s
A
b
b
v
s
 
v
a
r
i
a
b
l
e
,
 
s
o
 
w
e
'
l
l
 
r
e
u
s
e
 
t
h
i
s
 
c
o
d
e
 
f
r
o
m
 
t
h
e
 
p
r
e
v
i
o
u
s
 
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
 
m
e
t
h
o
d
.

	
	
	
	
$
t
h
i
s
-
>
c
l
a
s
s
A
b
b
v
s
[
 
$
r
t
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
 
]
[
 
'
a
b
b
v
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
S
_
A
B
B
V
'
.
$
r
t
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
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
t
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
_
a
b
b
v
'
]
)
,
 
f
a
l
s
e
)
;

	
	
	
	
$
t
h
i
s
-
>
c
l
a
s
s
A
b
b
v
s
[
 
$
r
t
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
 
]
[
 
'
d
e
s
c
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
T
Y
P
E
S
_
D
E
S
C
'
.
$
r
t
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
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
t
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
_
f
u
l
l
_
d
e
s
c
'
]
)
,
 
f
a
l
s
e
)
;

	
	
	
	
$
t
h
i
s
-
>
c
l
a
s
s
A
b
b
v
s
[
 
$
r
t
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
 
]
[
 
'
i
m
a
g
e
'
 
]
 
=
 
$
r
t
[
'
i
m
a
g
e
'
]
;

	
	
	
}

	
	
}


	
	
/
/
e
a
c
h
 
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
 
w
i
t
h
 
i
t
`
s
 
a
s
s
i
g
n
e
d
 
r
o
o
m
 
t
y
p
e
s
.

	
	
$
t
h
i
s
-
>
r
o
o
m
t
y
p
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
y
t
y
p
e
s
_
x
r
e
f
 
=
 
$
j
o
m
r
e
s
_
r
o
o
m
_
t
y
p
e
s
-
>
a
l
l
_
p
t
y
p
e
_
r
t
y
p
e
_
x
r
e
f
s
;

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
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
_
a
l
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
t
y
p
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
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
t
y
p
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
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
t
y
p
e
_
t
i
t
l
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
y
_
t
y
p
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
y
_
t
y
p
e
s
'
)
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
y
_
t
y
p
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
(
)
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
y
_
t
y
p
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
t
y
p
e
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
y
_
t
y
p
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
t
y
p
e
s
 
a
s
 
$
p
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
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
t
y
p
e
s
[
 
$
p
t
[
'
i
d
'
]
 
]
 
=
 
$
p
t
[
'
p
t
y
p
e
_
d
e
s
c
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
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
t
y
p
e
_
t
i
t
l
e
s
[
 
$
p
t
[
'
i
d
'
]
 
]
 
=
 
$
p
t
[
'
p
t
y
p
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
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
_
a
l
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
f
e
a
t
u
r
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
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
y
_
f
e
a
t
u
r
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
y
_
f
e
a
t
u
r
e
s
'
)
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
y
_
f
e
a
t
u
r
e
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
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
(
)
;


	
	
$
t
h
i
s
-
>
a
l
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
f
e
a
t
u
r
e
s
 
=
 
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
y
_
f
e
a
t
u
r
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
f
e
a
t
u
r
e
s
;

 
 
 
 
}


 
 
 
 
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
_
a
l
l
_
r
e
s
o
u
r
c
e
_
f
e
a
t
u
r
e
s
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
 
=
 
0
,
 
$
i
n
c
l
u
d
i
n
g
_
g
l
o
b
a
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
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


 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
 
`
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
`
 
=
 
'
.
(
i
n
t
)
 
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
;


 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
c
l
u
d
i
n
g
_
g
l
o
b
a
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
'
 
O
R
 
`
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
`
 
=
 
0
 
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
`
,
 
`
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
`
,
 
`
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
`
,
 
`
p
t
y
p
e
_
x
r
e
f
`
,
 
`
i
m
a
g
e
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
f
e
a
t
u
r
e
s
 
W
H
E
R
E
 
'
.
$
c
l
a
u
s
e
;

 
 
 
 
 
 
 
 
$
r
o
o
m
F
e
a
t
u
r
e
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
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
r
o
o
m
F
e
a
t
u
r
e
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
r
o
o
m
F
e
a
t
u
r
e
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
f
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
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
f
e
a
t
u
r
e
s
_
u
i
d
'
 
]
 
=
 
(
i
n
t
)
 
$
f
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
f
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
S
C
R
I
P
T
I
O
N
'
.
(
i
n
t
)
 
$
f
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
f
-
>
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
f
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
i
m
a
g
e
'
 
]
 
=
 
$
f
-
>
i
m
a
g
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
-
>
p
t
y
p
e
_
x
r
e
f
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
f
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
p
t
y
p
e
_
x
r
e
f
'
 
]
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
f
-
>
p
t
y
p
e
_
x
r
e
f
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
f
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
p
t
y
p
e
_
x
r
e
f
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

