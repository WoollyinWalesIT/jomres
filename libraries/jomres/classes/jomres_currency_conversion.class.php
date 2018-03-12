
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
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n

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
e
x
c
h
a
n
g
e
_
r
a
t
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
c
u
r
r
e
n
c
y
_
e
x
c
h
a
n
g
e
_
r
a
t
e
s
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
e
x
c
h
a
n
g
e
_
r
a
t
e
s
-
>
r
a
t
e
s
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
a
t
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
c
u
r
r
e
n
c
y
_
e
x
c
h
a
n
g
e
_
r
a
t
e
s
-
>
r
a
t
e
s
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
t
e
s
[
 
'
G
B
P
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
h
i
s
_
c
o
d
e
_
c
a
n
_
b
e
_
c
o
n
v
e
r
t
e
d
(
$
t
a
r
g
e
t
_
c
o
d
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
v
a
l
i
d
 
=
 
f
a
l
s
e
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
a
t
e
s
 
a
s
 
$
b
a
s
e
 
=
>
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
t
a
r
g
e
t
_
c
o
d
e
,
 
$
c
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
 
=
 
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
 
$
v
a
l
i
d
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
 
c
o
n
v
e
r
t
_
s
u
m
(
$
f
i
g
u
r
e
,
 
$
b
a
s
e
,
 
$
f
o
r
e
i
g
n
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
b
a
s
e
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
r
a
t
e
s
[
 
'
G
B
P
'
 
]
[
 
$
b
a
s
e
 
]
;

 
 
 
 
 
 
 
 
$
f
o
r
e
i
g
n
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
r
a
t
e
s
[
 
'
G
B
P
'
 
]
[
 
$
f
o
r
e
i
g
n
 
]
;

 
 
 
 
 
 
 
 
$
s
u
m
_
i
n
_
g
b
p
 
=
 
$
f
i
g
u
r
e
 
/
 
$
b
a
s
e
_
r
a
t
e
;

 
 
 
 
 
 
 
 
$
f
o
r
e
i
g
n
_
s
u
m
 
=
 
$
s
u
m
_
i
n
_
g
b
p
 
*
 
$
f
o
r
e
i
g
n
_
r
a
t
e
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
f
o
r
e
i
g
n
_
s
u
m
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
e
x
c
h
a
n
g
e
_
r
a
t
e
_
d
r
o
p
d
o
w
n
(
$
b
a
s
e
 
=
 
'
'
,
 
$
a
l
t
e
r
n
a
t
e
_
t
e
m
p
l
a
t
e
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
b
a
s
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
 
=
 
'
G
B
P
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
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
c
o
d
e
_
v
a
l
i
d
(
$
b
a
s
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
 
=
 
'
G
B
P
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
_
c
o
d
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
c
u
r
r
e
n
c
y
_
c
o
d
e
s
'
)
;

	
	

 
 
 
 
 
 
 
 
$
f
m
t
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
t
h
i
s
-
>
r
a
t
e
s
[
 
'
G
B
P
'
 
]
 
a
s
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
 
=
>
 
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
t
h
i
s
-
>
c
h
e
c
k
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
c
o
d
e
_
v
a
l
i
d
(
$
c
u
r
r
e
n
c
y
_
c
o
d
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
c
o
d
e
s
[
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
m
t
s
[
 
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
m
a
k
e
O
p
t
i
o
n
(
$
c
u
r
r
e
n
c
y
_
c
o
d
e
,
 
$
t
e
x
t
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
c
y
_
c
o
d
e
 
=
=
 
$
b
a
s
e
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
s
e
l
e
c
t
e
d
=
"
s
e
l
e
c
t
e
d
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
$
c
u
r
r
e
n
c
y
_
c
o
d
e
]
 
=
 
a
r
r
a
y
(
'
C
U
R
R
E
N
C
Y
_
C
O
D
E
'
 
=
>
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
,
 
'
T
E
X
T
'
 
=
>
 
$
t
e
x
t
,
 
'
S
E
L
E
C
T
E
D
'
 
=
>
 
$
s
e
l
e
c
t
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
j
a
v
a
s
c
r
i
p
t
 
=
 
'
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
s
w
i
t
c
h
_
e
x
c
h
a
n
g
e
_
r
a
t
e
(
\
'
'
.
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
\
'
,
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
;
"
'
;

 
 
 
 
 
 
 
 
i
f
 
(
$
a
l
t
e
r
n
a
t
e
_
t
e
m
p
l
a
t
e
 
&
&
 
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
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
o
u
t
p
u
t
[
'
F
I
R
S
T
'
]
 
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
r
o
w
s
[
$
b
a
s
e
]
[
'
T
E
X
T
'
]
)
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
F
I
R
S
T
'
]
 
=
 
$
r
o
w
s
[
$
b
a
s
e
]
[
'
T
E
X
T
'
]
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
c
u
r
r
e
n
c
y
_
d
r
o
p
d
o
w
n
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
d
r
o
p
d
o
w
n
 
=
 
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
r
o
p
d
o
w
n
 
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
s
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
$
f
m
t
s
,
 
'
u
s
e
r
_
c
u
r
r
e
n
t
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
c
o
d
e
'
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
"
 
'
.
$
j
a
v
a
s
c
r
i
p
t
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
b
a
s
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
d
r
o
p
d
o
w
n
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
 
c
h
e
c
k
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
c
o
d
e
_
v
a
l
i
d
(
$
c
o
d
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
v
a
l
i
d
 
=
 
f
a
l
s
e
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
a
t
e
s
 
a
s
 
$
b
a
s
e
 
=
>
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
c
o
d
e
,
 
$
c
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
 
=
 
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
 
$
v
a
l
i
d
;

 
 
 
 
}

}

