
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
0
o
a
u
t
h
_
i
s
a
u
t
h
o
r
i
s
e
d

	
{

	
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
)
;

	
	
$
r
e
s
u
l
t
 
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
R
e
g
i
s
t
e
r
e
d
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
_
P
O
S
T
[
'
u
s
e
r
n
a
m
e
'
]
)
)

	
	
	
	
{

	
	
	
	
i
f
 
(
 
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
 
)

	
	
	
	
	
{

	
	
	
	
	
$
a
p
p
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
A
p
p
l
i
c
a
t
i
o
n
(
)
;

	
	
	
	
	
$
u
s
e
r
n
a
m
e
 
=
 
$
a
p
p
-
>
i
n
p
u
t
-
>
g
e
t
(
'
u
s
e
r
n
a
m
e
'
,
 
'
'
,
 
'
S
T
R
I
N
G
'
)
;

	
	
	
	
	
$
p
a
s
s
w
o
r
d
 
=
 
$
a
p
p
-
>
i
n
p
u
t
-
>
g
e
t
(
'
p
a
s
s
w
o
r
d
'
,
 
'
'
,
 
'
S
T
R
I
N
G
'
)
;

	
	
	
	
	
$
r
e
s
u
l
t
 
=
 
$
a
p
p
-
>
l
o
g
i
n
(
a
r
r
a
y
(
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
s
e
r
n
a
m
e
,
 
'
p
a
s
s
w
o
r
d
'
 
=
>
 
$
p
a
s
s
w
o
r
d
)
)
;

	
	
	
	
	
}

	
	
	
	
e
l
s
e

	
	
	
	
	
{

	
	
	
	
	
$
c
r
e
d
e
n
t
i
a
l
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
r
e
d
e
n
t
i
a
l
s
[
'
u
s
e
r
_
l
o
g
i
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
P
O
S
T
,
 
'
u
s
e
r
n
a
m
e
'
,
 
'
'
)
;

	
	
	
	
	
$
c
r
e
d
e
n
t
i
a
l
s
[
'
u
s
e
r
_
p
a
s
s
w
o
r
d
'
]
 
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
P
O
S
T
,
 
'
p
a
s
s
w
o
r
d
'
,
 
'
'
)
;

	
	
	
	
	
$
u
s
e
r
 
=
 
w
p
_
s
i
g
n
o
n
(
$
c
r
e
d
e
n
t
i
a
l
s
)
;

	
	
 

	
	
	
	
	
i
f
 
(
 
i
s
_
w
p
_
e
r
r
o
r
(
$
u
s
e
r
)
 
)
 

	
	
	
	
	
	
$
r
e
s
u
l
t
 
=
 
f
a
l
s
e
;

	
	
	
	
	
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
 
t
r
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	

	
	
	
	
i
f
 
(
$
r
e
s
u
l
t
)
 
/
/
 
w
e
'
v
e
 
a
u
t
h
e
n
t
i
c
a
t
e
d
 
t
h
e
 
u
s
e
r
 
i
n
 
t
h
e
 
c
m
s
,
 
w
e
 
n
o
w
 
n
e
e
d
 
t
o
 
r
e
l
o
a
d
 
t
h
e
 
u
s
e
r
'
s
 
J
o
m
r
e
s
 
d
e
t
a
i
l
s

	
	
	
	
	
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
"
j
r
_
u
s
e
r
"
)
;

	
	
	
	
	
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
 
n
e
w
 
j
r
_
u
s
e
r
(
)
;

	
	
	
	
	
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
5
'
,
"
o
a
u
t
h
_
a
u
t
h
o
r
i
s
e
"
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
d
i
s
p
l
a
y
_
l
o
g
i
n
_
f
o
r
m
(
)
;

	
	
	
	
	
}

	
	
	
	
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
d
i
s
p
l
a
y
_
l
o
g
i
n
_
f
o
r
m
(
)
;

	
	
	
	
}

	
	
	
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
5
'
,
"
o
a
u
t
h
_
a
u
t
h
o
r
i
s
e
"
)
;

	
	
	
}

	
	
}

	

	
f
u
n
c
t
i
o
n
 
d
i
s
p
l
a
y
_
l
o
g
i
n
_
f
o
r
m
(
)

	
	
{

	
	
e
x
i
t
(
'

	
	
<
f
o
r
m
 
a
c
t
i
o
n
=
"
"
 
m
e
t
h
o
d
=
"
p
o
s
t
"
>

	
	
 
 
<
l
a
b
e
l
>
P
l
e
a
s
e
 
l
o
g
i
n
<
/
l
a
b
e
l
>
<
b
r
 
/
>

	
	
 
 
U
s
e
r
 
n
a
m
e
:
<
b
r
>

	
	
 
 
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
u
s
e
r
n
a
m
e
"
>
<
b
r
>

	
	
 
 
U
s
e
r
 
p
a
s
s
w
o
r
d
:
<
b
r
>

	
	
 
 
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
p
a
s
s
w
o
r
d
"
 
n
a
m
e
=
"
p
a
s
s
w
o
r
d
"
>

	
	
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
s
u
b
m
i
t
"
 
v
a
l
u
e
=
"
L
o
g
 
i
n
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
p
r
i
m
a
r
y
"
 
n
a
m
e
=
"
S
u
b
m
i
t
"
>

	
	
<
/
f
o
r
m
>
'
)
;

	
	
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
