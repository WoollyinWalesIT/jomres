
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
o
m
r
e
s
_
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s

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
t
h
i
s
-
>
t
a
s
k
 
=
 
'
'
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
s
h
o
w
_
a
l
l
 
=
 
f
a
l
s
e
;

	
	

	
	
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
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
o
m
r
e
s
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
;

	
	
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
-
>
g
e
t
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
'
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
'
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
 
b
u
i
l
d
_
m
o
d
a
l
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
t
a
s
k
 
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
_
c
u
r
r
e
n
t
_
t
a
s
k
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
 
'
V
I
D
E
O
_
T
U
T
O
R
A
L
S
_
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
V
I
D
E
O
_
T
U
T
O
R
A
L
S
_
T
I
T
L
E
'
,
 
'
V
I
D
E
O
_
T
U
T
O
R
A
L
S
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
;

	
	

	
	
$
v
i
d
e
o
s
 
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
_
v
i
d
e
o
_
u
r
l
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
v
i
d
e
o
s
)
)
 
{

	
	
	
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

	
	
	
f
o
r
e
a
c
h
 
(
$
v
i
d
e
o
s
 
a
s
 
$
v
i
d
e
o
)
 
{

	
	
	
	
$
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

	
	
	
	
$
t
i
t
l
e
 
=
 
$
v
i
d
e
o
[
'
t
i
t
l
e
'
]
;

	
	
	
	
$
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
v
i
d
e
o
[
'
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
r
[
'
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
$
t
i
t
l
e
,
 
$
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
r
[
'
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
$
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
r
[
'
V
I
D
E
O
_
I
D
'
]
 
=
 
$
v
i
d
e
o
[
'
v
i
d
e
o
_
i
d
'
]
;

	
	
	
	
$
r
[
'
V
I
D
E
O
_
I
D
_
S
A
N
I
T
I
S
E
D
'
]
 
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
"
-
"
,
"
"
,
 
$
v
i
d
e
o
[
'
v
i
d
e
o
_
i
d
'
]
)
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
s
h
o
w
_
a
l
l
)
 
{

	
	
	
	
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
F
R
O
N
T
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
a
l
l
_
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
.
h
t
m
l
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
a
l
l
_
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
.
h
t
m
l
'
)
;

	
	
	
	
}

	
	
	
}

	
	
	
e
l
s
e
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
F
R
O
N
T
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
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
.
h
t
m
l
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
A
D
M
I
N
I
S
T
R
A
T
O
R
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
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
.
h
t
m
l
'
)
;

	
	
	
}


	
	
	
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
1
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
2
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
3
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
4
'
,
 
$
r
o
w
s
)
;

	
	
	
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
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
 
r
e
t
u
r
n
 
'
'
;


	
}

	

	

	
/
/
G
e
t
 
r
o
o
m
 
d
e
t
a
i
l
s

	
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
v
i
d
e
o
_
u
r
l
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

	
	

	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
 
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
_
v
i
d
e
o
s
_
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
v
i
d
e
o
s
 
=
 
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
;

	
	
}
 
e
l
s
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
)
 
{

	
	
	
$
v
i
d
e
o
s
 
=
 
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
R
E
A
L
E
S
T
A
T
E
'
]
;

	
	
}
 
e
l
s
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
)
 
{

	
	
	
$
v
i
d
e
o
s
 
=
 
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
;

	
	
}
 
e
l
s
e
i
f
 
(
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
 
=
=
 
t
r
u
e
)
 
{

	
	
	
$
v
i
d
e
o
s
 
=
 
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
T
O
U
R
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
v
i
d
e
o
s
 
=
 
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
;

	
	
}


	
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
t
a
s
k
 
=
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
t
a
s
k
 
=
 
'
c
p
a
n
e
l
'
;

	
}

	

	
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
s
h
o
w
_
a
l
l
)
 
{

	
	
$
a
l
l
_
v
i
d
e
o
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
 
T
h
e
r
e
 
w
i
l
l
 
b
e
 
d
u
p
l
i
c
a
t
e
s
 
b
e
c
a
u
s
e
 
v
i
d
e
o
s
 
c
a
n
 
b
e
 
s
h
o
w
n
 
o
n
 
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
 
p
a
g
e
,
 
s
o
 
w
e
'
l
l
 
p
u
t
 
t
h
e
m
 
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
 
u
s
i
n
g
 
t
h
e
 
t
i
t
l
e
 
a
s
 
t
h
e
 
k
e
y
,
 
w
h
i
c
h
 
w
i
l
l
 
g
i
v
e
 
u
s
 
a
 
u
n
i
q
u
e
 
a
r
r
a
y

	
	
f
o
r
e
a
c
h
 
(
$
v
i
d
e
o
s
 
a
s
 
$
v
i
d
e
o
_
a
r
r
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
v
i
d
e
o
_
a
r
r
 
a
s
 
$
v
i
d
e
o
)
 
{

	
	
	
	
$
t
i
t
l
e
 
=
 
$
v
i
d
e
o
[
'
t
i
t
l
e
'
]
;

	
	
	
	
$
a
l
l
_
v
i
d
e
o
s
[
$
t
i
t
l
e
]
 
=
 
$
v
i
d
e
o
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
a
l
l
_
v
i
d
e
o
s
;

	
}
 
e
l
s
e
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
v
i
d
e
o
s
[
$
t
h
i
s
-
>
t
a
s
k
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
 
$
v
i
d
e
o
s
[
$
t
h
i
s
-
>
t
a
s
k
]
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
 
'
'
;

	
	
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
c
u
r
r
e
n
t
_
t
a
s
k
(
)
 

	
{

	
	
r
e
t
u
r
n
 
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
t
a
s
k
'
)
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
v
i
d
e
o
s
_
a
r
r
a
y
(
)
 

	
{

	
	
$
v
i
d
e
o
s
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
 

	
	
	
'
S
R
P
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
M
R
P
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
T
O
U
R
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
R
E
A
L
E
S
T
A
T
E
'
 
=
>
 
a
r
r
a
y
(
)
,

	
	
	
'
A
D
M
I
N
'

	
	
	
)
;

	
	

	
	
/
/
 
W
e
 
w
i
l
l
 
a
l
l
o
w
 
m
u
l
t
i
p
l
e
 
i
t
e
m
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
 
f
o
r
 
e
a
c
h
 
t
a
s
k
 
b
e
c
a
u
s
e
 
t
a
s
k
s
 
l
i
k
e
 
t
a
r
i
f
f
 
e
d
i
t
i
n
g
 
w
i
l
l
 
r
e
q
u
i
r
e
 
m
u
l
t
i
p
l
e
 
v
i
d
e
o
s
 
f
o
r
 
e
a
c
h
 
e
d
i
t
i
n
g
 
 
m
o
d
e
.

	
	

	
	
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

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
C
P
A
N
E
L
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
C
P
A
N
E
L
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
p
I
l
l
i
A
6
u
J
r
U
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
T
I
M
E
L
I
N
E
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
T
I
M
E
L
I
N
E
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
0
R
u
J
C
e
d
h
0
C
Q
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
d
a
s
h
b
o
a
r
d
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
d
a
s
h
b
o
a
r
d
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
L
I
S
T
P
R
O
P
E
R
T
I
E
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
L
I
S
T
P
R
O
P
E
R
T
I
E
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
6
V
L
-
i
S
S
2
g
o
0
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
l
i
s
t
y
o
u
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
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
l
i
s
t
y
o
u
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
T
O
U
R
'
]
[
'
l
i
s
t
y
o
u
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
R
E
A
L
E
S
T
A
T
E
'
]
[
'
l
i
s
t
y
o
u
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
E
D
I
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
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
E
D
I
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
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
o
C
t
q
b
Q
y
L
d
m
U
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
e
d
i
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
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
e
d
i
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
T
O
U
R
'
]
[
'
l
i
s
t
y
o
u
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
R
E
A
L
E
S
T
A
T
E
'
]
[
'
l
i
s
t
y
o
u
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
C
H
A
N
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
C
H
A
N
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
F
Q
3
A
R
m
r
t
z
2
g
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
N
O
R
M
A
L
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
M
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
N
O
R
M
A
L
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
M
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
l
2
W
l
W
J
6
C
k
W
o
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
N
O
R
M
A
L
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
S
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
N
O
R
M
A
L
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
S
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
3
_
W
W
a
7
f
D
8
-
A
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
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
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
M
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
M
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
F
8
v
f
L
3
P
h
9
6
U
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
l
i
s
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
m
i
c
r
o
m
a
n
a
g
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
S
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
S
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
y
O
z
f
w
V
6
n
c
r
4
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
l
i
s
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
m
i
c
r
o
m
a
n
a
g
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
M
O
R
E
_
G
U
E
S
T
S
_
M
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
T
A
R
I
F
F
_
E
D
I
T
I
N
G
_
M
O
D
E
_
M
O
R
E
_
G
U
E
S
T
S
_
M
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
o
X
_
Y
K
Z
b
H
K
x
w
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
l
i
s
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
m
i
c
r
o
m
a
n
a
g
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
G
U
E
S
T
_
T
Y
P
E
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
I
C
R
O
M
A
N
A
G
E
_
G
U
E
S
T
_
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
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
t
y
6
1
n
8
l
2
q
V
I
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
l
i
s
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
m
i
c
r
o
m
a
n
a
g
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
l
i
s
t
c
u
s
t
o
m
e
r
t
y
p
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
l
i
s
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
m
i
c
r
o
m
a
n
a
g
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
b
u
s
i
n
e
s
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
l
i
s
t
c
u
s
t
o
m
e
r
t
y
p
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
E
D
I
A
_
C
E
N
T
R
E
_
M
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
E
D
I
A
_
C
E
N
T
R
E
_
M
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
a
z
l
h
J
2
8
m
r
d
U
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
s
h
o
w
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
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
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
l
i
s
t
_
r
e
s
o
u
r
c
e
s
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
e
d
i
t
_
r
e
s
o
u
r
c
e
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
M
R
P
'
]
[
'
v
i
e
w
p
r
o
p
e
r
t
y
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
E
D
I
A
_
C
E
N
T
R
E
_
S
R
P
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
M
E
D
I
A
_
C
E
N
T
R
E
_
S
R
P
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
p
N
n
P
C
x
Q
T
3
Y
M
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
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
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
S
R
P
'
]
[
'
v
i
e
w
p
r
o
p
e
r
t
y
'
]
[
]
 
=
 
$
a
r
r
;
 

	
	
	
}

	
	

	
	
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
C
P
A
N
E
L
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
C
P
A
N
E
L
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
1
9
_
N
x
_
x
S
V
l
0
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
A
D
D
_
P
R
O
P
E
R
T
Y
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
A
D
D
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
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
q
U
9
Z
r
2
D
l
Y
m
4
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
C
O
M
P
L
E
T
I
N
G
_
P
R
O
P
E
R
T
Y
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
C
O
M
P
L
E
T
I
N
G
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
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
p
v
K
-
q
a
F
7
7
e
o
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
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
p
p
r
o
v
a
l
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
P
L
U
G
I
N
_
M
A
N
A
G
E
R
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
P
L
U
G
I
N
_
M
A
N
A
G
E
R
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
L
d
3
X
4
S
w
x
4
c
4
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
c
p
a
n
e
l
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
s
h
o
w
p
l
u
g
i
n
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
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
A
N
A
G
E
R
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
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
A
N
A
G
E
R
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
v
3
I
l
b
7
x
D
7
8
k
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
l
i
s
t
_
u
s
e
r
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
_
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
k
Q
R
A
4
t
J
S
Z
f
M
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
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
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
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
Y
P
E
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
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
Y
P
E
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
L
G
s
E
u
y
4
F
D
2
k
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
l
i
s
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
t
y
p
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
e
d
i
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
t
y
p
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
l
i
s
t
G
l
o
b
a
l
r
o
o
m
T
y
p
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
e
d
i
t
G
l
o
b
a
l
r
o
o
m
T
y
p
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
U
P
L
O
A
D
I
N
G
_
M
A
P
_
M
A
R
K
E
R
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
U
P
L
O
A
D
I
N
G
_
M
A
P
_
M
A
R
K
E
R
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
x
2
E
F
J
o
N
G
0
h
A
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
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
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
l
i
s
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
t
y
p
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
e
d
i
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
t
y
p
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
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
F
E
A
T
U
R
E
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
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
F
E
A
T
U
R
E
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
_
t
U
z
S
U
3
B
e
W
E
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
l
i
s
t
P
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
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
e
d
i
t
P
f
e
a
t
u
r
e
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
S
H
O
R
T
C
O
D
E
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
S
H
O
R
T
C
O
D
E
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
J
w
E
w
m
x
r
G
4
c
8
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
a
s
a
m
o
d
u
l
e
_
r
e
p
o
r
t
'
]
[
]
 
=
 
$
a
r
r
;


	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
L
O
G
F
I
L
E
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
L
O
G
F
I
L
E
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
l
v
I
m
w
R
g
J
6
k
0
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
l
i
s
t
_
e
r
r
o
r
_
l
o
g
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
v
i
e
w
_
l
o
g
_
f
i
l
e
'
]
[
]
 
=
 
$
a
r
r
;


	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
T
R
A
N
S
L
A
T
I
O
N
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
T
R
A
N
S
L
A
T
I
O
N
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
n
o
5
P
S
D
u
z
B
z
o
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
t
r
a
n
s
l
a
t
e
_
l
a
n
g
_
f
i
l
e
_
s
t
r
i
n
g
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
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
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
t
r
a
n
s
l
a
t
e
_
l
o
c
a
l
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	

	
	
	
$
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
"
t
i
t
l
e
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
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
A
T
E
G
O
R
I
E
S
"
 
,
 
"
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
"
 
=
>
 
"
_
J
O
M
R
E
S
_
T
U
T
O
R
I
A
L
_
A
D
M
I
N
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
A
T
E
G
O
R
I
E
S
_
D
E
S
C
"
 
,
 
"
v
i
d
e
o
_
i
d
"
 
=
>
 
"
R
x
7
c
w
C
L
J
r
z
c
"
 
)
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
l
i
s
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
c
a
t
e
g
o
r
i
e
s
'
]
[
]
 
=
 
$
a
r
r
;

	
	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
[
'
A
D
M
I
N
'
]
[
'
e
d
i
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
c
a
t
e
g
o
r
y
'
]
[
]
 
=
 
$
a
r
r
;

	
	
}


	
	
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
"
v
i
d
e
o
s
_
a
r
r
a
y
"
 
,
 
$
v
i
d
e
o
s
_
a
r
r
a
y
 
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
7
1
5
0
'
)
;

	
	
$
v
i
d
e
o
s
_
a
r
r
a
y
 
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
"
v
i
d
e
o
s
_
a
r
r
a
y
"
)
;

	
	

	
	
r
e
t
u
r
n
 
$
v
i
d
e
o
s
_
a
r
r
a
y
;

	
}

}

