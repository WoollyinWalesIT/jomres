
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
 
T
h
i
s
 
c
l
a
s
s
 
i
s
 
f
r
o
m
 
t
h
e
 
i
p
i
n
f
o
d
b
.
c
o
m
 
w
e
b
s
i
t
e
.
 
N
o
 
l
i
c
e
n
s
e
 
i
n
f
o
r
m
a
t
i
o
n
 
w
a
s
 
i
n
 
t
h
e
 
f
i
l
e
,
 
e
r
g
o
 
i
t
 
i
s
n
'
t
 
r
e
p
l
i
c
a
t
e
d
 
h
e
r
e
.
 
A
s
s
u
m
i
n
g
 
t
h
a
t
 
i
t
 
i
s
 
f
r
e
e
w
a
r
e
 
u
n
l
e
s
s
 
i
n
f
o
r
m
e
d
 
o
t
h
e
r
w
i
s
e
.


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


f
i
n
a
l
 
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
i
p
2
l
o
c
a
t
i
o
n
_
l
i
t
e

{

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
e
r
r
o
r
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

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
s
e
r
v
i
c
e
 
=
 
'
a
p
i
.
i
p
i
n
f
o
d
b
.
c
o
m
'
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
v
e
r
s
i
o
n
 
=
 
'
v
3
'
;

 
 
 
 
p
r
o
t
e
c
t
e
d
 
$
a
p
i
K
e
y
 
=
 
'
'
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
d
e
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
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
 
s
e
t
K
e
y
(
$
k
e
y
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
k
e
y
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
a
p
i
K
e
y
 
=
 
$
k
e
y
;

 
 
 
 
 
 
 
 
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
E
r
r
o
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
i
m
p
l
o
d
e
(
"
\
n
"
,
 
$
t
h
i
s
-
>
e
r
r
o
r
s
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
 
g
e
t
C
o
u
n
t
r
y
(
$
h
o
s
t
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
g
e
t
R
e
s
u
l
t
(
$
h
o
s
t
,
 
'
i
p
-
c
o
u
n
t
r
y
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
C
i
t
y
(
$
h
o
s
t
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
g
e
t
R
e
s
u
l
t
(
$
h
o
s
t
,
 
'
i
p
-
c
i
t
y
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
R
e
s
u
l
t
(
$
h
o
s
t
,
 
$
n
a
m
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
p
 
=
 
@
g
e
t
h
o
s
t
b
y
n
a
m
e
(
$
h
o
s
t
)
;


 
 
 
 
 
 
 
 
i
f
 
(
p
r
e
g
_
m
a
t
c
h
(
'
/
^
(
?
:
2
5
[
0
-
5
]
|
2
[
0
-
4
]
\
d
|
1
\
d
\
d
|
[
1
-
9
]
\
d
|
\
d
)
(
?
:
[
.
]
(
?
:
2
5
[
0
-
5
]
|
2
[
0
-
4
]
\
d
|
1
\
d
\
d
|
[
1
-
9
]
\
d
|
\
d
)
)
{
3
}
$
/
'
,
 
$
i
p
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
x
m
l
 
=
 
@
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
'
h
t
t
p
:
/
/
'
.
$
t
h
i
s
-
>
s
e
r
v
i
c
e
.
'
/
'
.
$
t
h
i
s
-
>
v
e
r
s
i
o
n
.
'
/
'
.
$
n
a
m
e
.
'
/
?
k
e
y
=
'
.
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
K
e
y
.
'
&
i
p
=
'
.
$
i
p
.
'
&
f
o
r
m
a
t
=
x
m
l
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
t
r
y
 
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
 
@
n
e
w
 
S
i
m
p
l
e
X
M
L
E
l
e
m
e
n
t
(
$
x
m
l
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
e
s
p
o
n
s
e
 
a
s
 
$
f
i
e
l
d
 
=
>
 
$
v
a
l
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
[
 
(
s
t
r
i
n
g
)
 
$
f
i
e
l
d
 
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
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
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
e
r
r
o
r
s
[
 
]
 
=
 
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
r
r
o
r
s
[
 
]
 
=
 
'
"
'
.
$
h
o
s
t
.
'
"
 
i
s
 
n
o
t
 
a
 
v
a
l
i
d
 
I
P
 
a
d
d
r
e
s
s
 
o
r
 
h
o
s
t
n
a
m
e
.
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
}

}

