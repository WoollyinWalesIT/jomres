
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
*

 
*
 
T
h
e
 
t
r
u
e
 
h
e
a
r
t
 
o
f
 
J
o
m
r
e
s
.
 
F
i
n
d
s
 
a
l
l
 
c
o
r
e
 
a
n
d
 
p
l
u
g
i
n
 
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
 
f
o
r
 
J
o
m
r
e
s
,
 
e
n
a
b
l
e
s
 
c
a
l
l
i
n
g
 
o
f
 
s
p
e
c
i
f
i
c
 
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
 
a
n
d
 
c
a
n
 
r
e
t
u
r
n
 
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
t
o
r
e
d
 
v
a
r
i
a
b
l
e
s
.

 
*
/

c
l
a
s
s
 
m
c
H
a
n
d
l
e
r

{

 
 
 
 
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


 
 
 
 
 
 
 
 
$
t
h
i
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
i
r
e
c
t
o
r
i
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
l
o
g
 
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
l
o
g
g
i
n
g
_
e
n
b
l
e
d
 
=
 
f
a
l
s
e
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
C
o
n
f
i
g
[
 
'
e
r
r
o
r
C
h
e
c
k
i
n
g
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
e
r
r
o
r
C
h
e
c
k
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
g
i
n
g
_
e
n
b
l
e
d
 
=
 
t
r
u
e
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
c
u
r
r
e
n
t
E
v
e
n
t
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
r
e
g
i
s
t
r
y
 
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
_
r
e
g
i
s
t
r
y
'
)
;


 
 
 
 
 
 
 
 
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
r
e
g
i
s
t
r
y
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
 
'
0
0
0
0
1
'
 
]
[
'
s
t
a
r
t
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
g
i
s
t
r
y
-
>
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
y
(
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
 
=
 
$
r
e
g
i
s
t
r
y
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
s
t
e
r
e
d
_
c
l
a
s
s
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
i
r
e
c
t
o
r
i
e
s
 
=
 
$
r
e
g
i
s
t
r
y
-
>
g
e
t
_
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
_
d
i
r
e
c
t
o
r
i
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
s
(
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
0
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
[
 
'
e
d
i
t
i
n
g
O
n
'
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
$
e
v
e
n
t
A
r
g
s
 
=
 
n
u
l
l
;

 
 
 
 
 
 
 
 
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
 
=
 
t
r
u
e
;

	
	
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
 
=
 
'
.
c
l
a
s
s
.
p
h
p
'
;

 
 
 
 
 
 
 
 

	
	
e
c
h
o
 
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
T
O
U
C
H
T
E
M
P
L
A
T
E
S
'
,
 
'
T
h
i
s
 
f
e
a
t
u
r
e
 
a
l
l
o
w
s
 
y
o
u
 
t
o
 
e
d
i
t
 
l
a
n
g
u
a
g
e
 
t
e
x
t
 
f
o
r
 
a
n
y
 
t
e
m
p
l
a
t
e
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
a
l
l
o
w
 
y
o
u
 
t
o
 
e
d
i
t
 
t
e
x
t
.
 
Y
o
u
 
w
i
l
l
 
b
e
 
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
 
d
e
f
a
u
l
t
 
t
e
x
t
 
f
o
r
 
e
v
e
r
y
 
p
r
o
p
e
r
t
y
 
a
n
d
 
s
a
v
i
n
g
 
t
h
a
t
 
t
e
x
t
 
t
o
 
t
h
e
 
d
a
t
a
b
a
s
e
.
 
H
T
M
L
 
c
o
d
e
 
i
s
 
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
.
 
T
o
 
c
h
a
n
g
e
 
t
h
e
 
l
a
n
g
u
a
g
e
 
t
h
a
t
 
t
h
e
 
t
e
x
t
 
i
s
 
s
a
v
e
d
 
f
o
r
,
 
c
h
a
n
g
e
 
t
h
e
 
d
e
f
a
u
l
t
 
l
a
n
g
u
a
g
e
 
i
n
 
t
h
e
 
S
i
t
e
 
S
e
t
t
i
n
g
s
 
-
>
 
M
i
s
c
 
t
a
b
.
 
C
l
i
c
k
 
o
n
 
a
 
l
i
n
e
 
t
o
 
e
d
i
t
 
t
h
e
 
t
e
x
t
.
'
)
;

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
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
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
 
a
s
 
$
e
v
e
n
t
P
o
i
n
t
 
=
>
 
$
e
v
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
e
v
 
a
s
 
$
e
v
e
n
t
N
a
m
e
 
=
>
 
$
e
v
e
n
t
D
e
t
a
i
l
s
)
 
{

	
	
	
	
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
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
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
,
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
)
;


	
	
	
	
$
f
i
l
e
n
a
m
e
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
.
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
;


	
	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
)
)
 
{

	
	
	
	
	
i
n
c
l
u
d
e
_
o
n
c
e
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
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
l
o
g
g
i
n
g
_
e
n
b
l
e
d
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
l
o
g
[
 
]
 
=
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
;

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
$
e
L
i
v
e
S
i
t
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
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
,
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
,
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
)
;

	
	
	
	
	
$
e
L
i
v
e
S
i
t
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
J
R
D
S
,
 
'
/
'
,
 
$
e
L
i
v
e
S
i
t
e
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
e
L
i
v
e
S
i
t
e
'
,
 
$
e
L
i
v
e
S
i
t
e
)
;

	
	
	
	
	

	
	
	
	
	
$
e
v
e
n
t
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
;

	
	
	
	
	

	
	
	
	
	
$
e
 
=
 
n
e
w
 
$
e
v
e
n
t
(
$
e
v
e
n
t
A
r
g
s
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
e
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
)
 
&
&
 
$
e
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
)
 
{

	
	
	
	
	
	
e
c
h
o
 
'
<
b
r
/
>
'
.
$
e
v
e
n
t
.
'
<
b
r
/
>
'
;

	
	
	
	
	
	
i
f
 
(
m
e
t
h
o
d
_
e
x
i
s
t
s
(
$
e
,
 
'
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
'
)
)
 
{

	
	
	
	
	
	
	
e
c
h
o
 
$
e
-
>
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
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

	
	
	
	
	
	
	
e
c
h
o
 
"
O
o
o
p
s
,
 
y
o
u
 
t
r
i
e
d
 
t
o
 
r
u
n
 
'
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
'
 
i
n
 
t
h
e
 
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
 
"
.
$
e
v
e
n
t
.
'
 
b
u
t
 
t
h
a
t
 
m
e
t
h
o
d
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	
u
n
s
e
t
(
$
e
)
;

	
	
	
	
}

	
	
	
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
A
c
u
t
a
l
l
y
 
c
a
l
l
s
 
t
h
e
 
t
r
i
g
g
e
r
e
d
 
e
v
e
n
t
.

 
 
 
 
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
$
e
v
e
n
t
P
o
i
n
t
,
 
$
e
v
e
n
t
A
r
g
s
 
=
 
n
u
l
l
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
t
V
a
l
 
=
 
n
u
l
l
;

	
	
$
c
h
e
c
k
_
a
c
c
e
s
s
 
=
 
f
a
l
s
e
;

	
	
$
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
 
=
 
'
.
c
l
a
s
s
.
p
h
p
'
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
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
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
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
-
>
c
o
n
t
r
o
l
l
a
b
l
e
_
p
a
t
t
e
r
n
s
[
$
e
v
e
n
t
P
o
i
n
t
]
)
)
 
{

	
	
	
	
$
c
h
e
c
k
_
a
c
c
e
s
s
 
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
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
 
&
&
 
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
)
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
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
 
a
s
 
$
e
v
e
n
t
N
a
m
e
 
=
>
 
$
e
v
e
n
t
D
e
t
a
i
l
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
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
,
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
)
;

	
	
	
	

	
	
	
	
$
f
i
l
e
n
a
m
e
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
.
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
;

	
	
	
	

	
	
	
	
i
f
 
(
$
c
h
e
c
k
_
a
c
c
e
s
s
)
 
{

	
	
	
	
	
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
-
>
t
h
i
s
_
u
s
e
r
_
c
a
n
(
$
e
v
e
n
t
N
a
m
e
)
)
 
{

	
	
	
	
	
	
s
y
s
t
e
m
_
l
o
g
(
'
A
c
c
e
s
s
 
c
o
n
t
r
o
l
 
p
r
e
v
e
n
t
e
d
 
s
y
s
t
e
m
 
f
r
o
m
 
r
u
n
n
i
n
g
 
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
)
;

	
	
	
	
	
	
$
c
a
n
_
a
c
c
e
s
s
 
=
 
f
a
l
s
e
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
$
c
a
n
_
a
c
c
e
s
s
 
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
c
a
n
_
a
c
c
e
s
s
 
&
&
 
f
i
l
e
_
e
x
i
s
t
s
(
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
)
)
 
{

	
	
	
	
	
i
n
c
l
u
d
e
_
o
n
c
e
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
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
l
o
g
g
i
n
g
_
e
n
b
l
e
d
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
l
o
g
[
 
]
 
=
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
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
c
u
r
r
e
n
t
E
v
e
n
t
 
=
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
;

	
	
	
	
	

	
	
	
	
	
$
e
L
i
v
e
S
i
t
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
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
,
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
,
 
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
)
;

	
	
	
	
	
$
e
L
i
v
e
S
i
t
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
J
R
D
S
,
 
'
/
'
,
 
$
e
L
i
v
e
S
i
t
e
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
e
L
i
v
e
S
i
t
e
'
,
 
$
e
L
i
v
e
S
i
t
e
)
;

	
	
	
	
	

	
	
	
	
	
$
e
v
e
n
t
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
;


	
	
	
	
	
i
f
 
(
!
c
l
a
s
s
_
e
x
i
s
t
s
(
$
e
v
e
n
t
)
)
 
{

	
	
	
	
	
	
e
c
h
o
 
'
E
r
r
o
r
,
 
c
l
a
s
s
 
'
.
$
e
v
e
n
t
.
"
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t
.
 
M
o
s
t
 
l
i
k
e
l
y
 
y
o
u
'
v
e
 
r
e
n
a
m
e
d
 
a
 
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
 
f
i
l
e
,
 
b
u
t
 
n
o
t
 
t
h
e
 
c
l
a
s
s
 
i
n
 
t
h
a
t
 
f
i
l
e
"
;


	
	
	
	
	
	
r
e
t
u
r
n
;

	
	
	
	
	
}

	
	
	
	
	
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
c
u
r
r
e
n
t
_
m
i
n
i
c
o
m
p
'
,
 
$
e
v
e
n
t
)
;

	
	
	
	
	
$
e
 
=
 
n
e
w
 
$
e
v
e
n
t
(
$
e
v
e
n
t
A
r
g
s
)
;

	
	
	
	
	
$
r
e
t
V
a
l
 
=
 
$
e
-
>
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
;

	
	
	
	
	
$
t
h
i
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
 
$
e
v
e
n
t
P
o
i
n
t
 
]
[
 
$
e
v
e
n
t
N
a
m
e
 
]
 
=
 
$
r
e
t
V
a
l
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
c
u
r
r
e
n
t
_
m
i
n
i
c
o
m
p
'
,
 
'
'
)
;

	
	
	
	
	
u
n
s
e
t
(
$
e
)
;

	
	
	
	
}
 
e
l
s
e
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
)
 
&
&
 
$
e
v
e
n
t
P
o
i
n
t
 
=
=
 
"
0
0
0
0
1
"
 
)
 
{
 
/
/
 
H
a
s
 
t
h
e
 
i
n
s
t
a
l
l
a
t
i
o
n
 
b
e
e
n
 
m
o
v
e
d
 
t
o
 
a
 
n
e
w
 
s
e
r
v
e
r
?

	
	
	
	
	
$
r
e
g
i
s
t
r
y
 
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
_
r
e
g
i
s
t
r
y
'
)
;

	
	
	
	
	
$
r
e
g
i
s
t
r
y
-
>
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
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
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
 
=
 
$
r
e
g
i
s
t
r
y
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
s
t
e
r
e
d
_
c
l
a
s
s
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
i
r
e
c
t
o
r
i
e
s
 
=
 
$
r
e
g
i
s
t
r
y
-
>
g
e
t
_
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
_
d
i
r
e
c
t
o
r
i
e
s
(
)
;

	
	
	
	
}
 

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
-
>
c
u
r
r
e
n
t
E
v
e
n
t
 
=
 
'
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
t
V
a
l
;

 
 
 
 
}


 
 
 
 
/
/
 
C
a
l
l
s
 
a
 
s
p
e
c
i
f
i
c
 
e
v
e
n
t
.

 
 
 
 
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
$
e
v
e
n
t
P
o
i
n
t
,
 
$
e
v
e
n
t
N
a
m
e
,
 
$
e
v
e
n
t
A
r
g
s
 
=
 
n
u
l
l
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
t
V
a
l
 
=
 
n
u
l
l
;

	
	
$
c
h
e
c
k
_
a
c
c
e
s
s
 
=
 
f
a
l
s
e
;

	
	
$
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
 
=
 
'
.
c
l
a
s
s
.
p
h
p
'
;

	
	
$
f
i
l
e
n
a
m
e
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
.
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
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
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
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
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
-
>
c
o
n
t
r
o
l
l
a
b
l
e
_
p
a
t
t
e
r
n
s
[
$
e
v
e
n
t
P
o
i
n
t
]
)
)
 
{

	
	
	
	
$
c
h
e
c
k
_
a
c
c
e
s
s
 
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
!
e
m
p
t
y
(
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
)
 
&
&
 
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
)
)
 
{

	
	
	
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
 
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
[
 
'
f
i
l
e
p
a
t
h
'
 
]
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
,
 
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
[
 
'
f
i
l
e
p
a
t
h
'
 
]
)
;

	
	
	

	
	
	
i
f
 
(
$
c
h
e
c
k
_
a
c
c
e
s
s
)
 
{

	
	
	
	
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
-
>
t
h
i
s
_
u
s
e
r
_
c
a
n
(
$
e
v
e
n
t
N
a
m
e
)
)
 
{

	
	
	
	
	
s
y
s
t
e
m
_
l
o
g
(
'
A
c
c
e
s
s
 
c
o
n
t
r
o
l
 
p
r
e
v
e
n
t
e
d
 
s
y
s
t
e
m
 
f
r
o
m
 
r
u
n
n
i
n
g
 
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
)
;

	
	
	
	
	
$
c
a
n
_
a
c
c
e
s
s
 
=
 
f
a
l
s
e
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
c
a
n
_
a
c
c
e
s
s
 
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
c
a
n
_
a
c
c
e
s
s
 
&
&
 
f
i
l
e
_
e
x
i
s
t
s
(
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
)
)
 
{

	
	
	
	
i
n
c
l
u
d
e
_
o
n
c
e
 
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
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
l
o
g
g
i
n
g
_
e
n
b
l
e
d
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
l
o
g
[
 
]
 
=
 
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
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
c
u
r
r
e
n
t
E
v
e
n
t
 
=
 
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
;

	
	
	
	

	
	
	
	
$
e
L
i
v
e
S
i
t
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
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
,
 
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
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
,
 
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
)
;

	
	
	
	
$
e
L
i
v
e
S
i
t
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
J
R
D
S
,
 
'
/
'
,
 
$
e
L
i
v
e
S
i
t
e
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
e
L
i
v
e
S
i
t
e
'
,
 
$
e
L
i
v
e
S
i
t
e
)
;

	
	
	
	

	
	
	
	
$
e
v
e
n
t
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
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
c
u
r
r
e
n
t
_
m
i
n
i
c
o
m
p
'
,
 
$
e
v
e
n
t
)
;

	
	
	
	
$
e
 
=
 
n
e
w
 
$
e
v
e
n
t
(
$
e
v
e
n
t
A
r
g
s
)
;

	
	
	
	
$
r
e
t
V
a
l
 
=
 
$
e
-
>
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
;

	
	
	
	
$
t
h
i
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
 
$
e
v
e
n
t
P
o
i
n
t
 
]
[
 
$
e
v
e
n
t
N
a
m
e
 
]
 
=
 
$
r
e
t
V
a
l
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
c
u
r
r
e
n
t
_
m
i
n
i
c
o
m
p
'
,
 
'
'
)
;

	
	
	
	
u
n
s
e
t
(
$
e
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
c
u
r
r
e
n
t
E
v
e
n
t
 
=
 
'
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
t
V
a
l
;

 
 
 
 
}


 
 
 
 
/
/
 
 
T
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
u
s
e
d
 
t
o
 
s
e
e
 
i
f
 
a
 
m
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
 
e
x
i
s
t
s
 
f
o
r
 
a
 
g
i
v
e
n
 
e
v
e
n
t
 
p
o
i
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
 
e
v
e
n
t
F
i
l
e
E
x
i
s
t
s
C
h
e
c
k
(
$
e
v
e
n
t
P
o
i
n
t
)

 
 
 
 
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
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
)
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
)
)
 
{

	
	
	
	
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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


 
 
 
 
/
/
 
 
T
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
u
s
e
d
 
t
o
 
s
e
e
 
i
f
 
a
 
m
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
 
e
x
i
s
t
s
.

 
 
 
 
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
 
e
v
e
n
t
S
p
e
c
i
f
i
c
l
y
E
x
i
s
t
s
C
h
e
c
k
(
$
e
v
e
n
t
P
o
i
n
t
,
 
$
e
v
e
n
t
N
a
m
e
)

 
 
 
 
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
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
)
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
)
)
 
{

	
	
	
	
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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


 
 
 
 
/
/
 
 
T
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
u
s
e
d
 
t
o
 
s
e
e
 
i
f
 
a
 
m
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
i
l
e
 
e
x
i
s
t
s
.

 
 
 
 
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
 
e
v
e
n
t
F
i
l
e
L
o
c
a
t
e
(
$
e
v
e
n
t
P
o
i
n
t
,
 
$
e
v
e
n
t
N
a
m
e
)

 
 
 
 
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
t
h
i
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
)
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
$
e
v
e
n
t
N
a
m
e
]
)
)
 
{

	
	
	
	
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
A
l
l
E
v
e
n
t
P
o
i
n
t
s
D
a
t
a
(
$
e
P
o
i
n
t
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
t
V
a
l
 
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
t
h
i
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
 
$
e
P
o
i
n
t
 
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
t
h
i
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
 
$
e
P
o
i
n
t
 
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
t
h
i
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
 
$
e
P
o
i
n
t
 
]
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

	
	
	
	
$
r
e
t
V
a
l
[
 
$
k
e
y
 
]
 
=
 
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
E
v
e
n
t
P
o
i
n
t
D
a
t
a
(
$
e
P
o
i
n
t
,
 
$
k
e
y
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
t
V
a
l
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
E
v
e
n
t
P
o
i
n
t
D
a
t
a
(
$
e
P
o
i
n
t
,
 
$
e
N
a
m
e
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
 
$
e
P
o
i
n
t
 
]
[
 
$
e
N
a
m
e
 
]
;

 
 
 
 
}

}

