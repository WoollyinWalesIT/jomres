
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
5
0
1
9
d
o
b
o
o
k
i
n
g
_
t
o
t
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
 
t
r
u
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

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
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
t
u
r
n
V
a
l
u
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
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
 
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
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
 
]
 
=
=
 
0
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
n
e
w
T
a
s
k
 
=
 
'
h
a
n
d
l
e
r
e
q
_
t
o
t
a
l
'
;

 
 
 
 
 
 
 
 
$
i
n
p
u
t
N
a
m
e
 
=
 
'
o
v
e
r
t
o
t
a
l
'
;

 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
V
a
l
u
e
 
=
 
'
'
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
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
o
v
e
r
r
i
d
e
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
)
 
&
&
 
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
o
v
e
r
r
i
d
e
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
 
!
=
 
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
f
m
t
 
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
u
r
r
e
n
c
y
_
f
o
r
m
a
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
V
a
l
u
e
 
=
 
$
c
u
r
r
f
m
t
-
>
g
e
t
_
f
o
r
m
a
t
t
e
d
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
o
v
e
r
r
i
d
e
_
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
F
o
r
m
I
n
s
e
r
t
[
 
'
T
O
T
A
L
_
H
E
A
D
E
R
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
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
T
O
T
A
L
'
,
 
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
T
O
T
A
L
'
)
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
F
o
r
m
I
n
s
e
r
t
[
 
'
T
O
T
A
L
_
I
N
P
U
T
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
b
o
x
"
 
s
i
z
e
=
"
1
2
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
 
i
d
=
"
'
.
$
i
n
p
u
t
N
a
m
e
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
d
e
f
a
u
l
t
V
a
l
u
e
.
'
"
 
o
n
C
h
a
n
g
e
=
"
j
o
m
r
e
s
A
j
a
x
_
'
.
$
n
e
w
T
a
s
k
.
'
(
t
h
i
s
.
v
a
l
u
e
)
"
>
'
;

 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
F
o
r
m
I
n
s
e
r
t
[
 
'
T
O
T
A
L
_
A
J
A
X
S
T
R
I
N
G
'
 
]
 
=
 
'
<
s
c
r
i
p
t
>

	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
	
/
*
*

	
	
	
	
 
*
 
W
e
 
s
h
o
w
 
a
 
s
i
m
p
l
e
 
l
o
a
d
i
n
g
 
i
n
d
i
c
a
t
o
r

	
	
	
	
 
*
 
u
s
i
n
g
 
t
h
e
 
j
o
m
r
e
s
J
q
u
e
r
y
 
a
j
a
x
 
e
v
e
n
t
s

	
	
	
	
 
*
/

	
	
	
	
}
)
;


	
	
	
f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
A
j
a
x
_
'
 
.
$
n
e
w
T
a
s
k
.
'
(
v
a
l
u
e
)
{

	
	
	
	
v
a
r
 
p
a
r
a
m
s
 
=
 
{

	
	
	
	
o
p
t
i
o
n
:
 
"
c
o
m
_
j
o
m
r
e
s
"
,

	
	
	
	
t
a
s
k
:
 
"
'
 
.
$
n
e
w
T
a
s
k
.
'
"
,

	
	
	
	
n
o
_
h
t
m
l
:
 
"
1
"
,

	
	
	
	
'
 
.
$
i
n
p
u
t
N
a
m
e
.
'
:
 
v
a
l
u
e

	
	
	
	
}
;

	
	
	
	
v
a
r
 
t
o
s
e
n
d
 
=
 
v
a
l
u
e
;

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
.
a
j
a
x
(
{

	
	
	
	
t
y
p
e
:
 
"
G
E
T
"
,

	
	
	
	
u
r
l
:
 
"
i
n
d
e
x
.
p
h
p
"
,

	
	
	
	
a
s
y
n
c
:
 
f
a
l
s
e
,

	
	
	
	
d
a
t
a
:
 
p
a
r
a
m
s
,

	
	
	
	
d
a
t
a
T
y
p
e
:
 
"
s
c
r
i
p
t
"

	
	
	
	
}
)

	
	
	
	
}
;

	
	
	
<
/
s
c
r
i
p
t
>
'
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
t
u
r
n
V
a
l
u
e
 
=
 
$
b
o
o
k
i
n
g
F
o
r
m
I
n
s
e
r
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

 
 
 
 
{

 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
 
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
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
T
O
T
A
L
'
,
 
'
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
T
O
T
A
L
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
M
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
.

 
 
 
 
 
#

 
 
 
 
 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
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

 
 
 
 
 
*
/

 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
t
u
r
n
V
a
l
u
e
;

 
 
 
 
}

}

